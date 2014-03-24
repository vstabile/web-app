<?php

namespace SocialFunding\Core\FrontendBundle\Controller;

use SocialFunding\Core\SharedBundle\Entity\Order;
use SocialFunding\Core\SharedBundle\Entity\OrderProduct;
use SocialFunding\Core\SharedBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SocialFunding\Core\SharedBundle\Entity\Cart;
use SocialFunding\Core\SharedBundle\Entity\CartProducts;
use SocialFunding\Core\SharedBundle\Entity\CampaignProducts;
use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\NovaPontoComClient;
use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Input\ConsultarProdutoCampanha;
use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Input\DadosListaProdutoCarinho;
use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Input\DadosCalcularCarrinho;
use SocialFunding\Core\SharedBundle\Entity\Costumer;

class CheckoutController extends Controller
{

    /**
     * @Route("/checkout/", name="checkout_index")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $costumer = $this->container->get('security.context')->getToken()->getUser();

        $cart = new Cart(new Session());
        $cart->setCampaign($request->request->get('campaign'));
        $selectedProductsRet = array();
        $quantity = $request->request->get('quantity');
        $selectedProducts = $request->request->get('selectedProducts');

        $cartInfo = $cart->getCart();
        $campaignId = (is_array($cartInfo) && array_key_exists('campaign', $cartInfo) && $cartInfo['campaign'] != "")? $cartInfo['campaign'] : $request->request->get('campaign');

        $em = $this->get('doctrine')->getManager();
        $repoCampaign = $em->getRepository('SharedBundle:Campaign');
        $repoCampaignProducts = $em->getRepository('SharedBundle:CampaignProducts');
        $currentCampaign = $repoCampaign->findOneById($campaignId);


        foreach ($quantity as $key => $currentQuantity) {
            if ($currentQuantity > 0) {
                $cartProduct = new CartProducts();
                $productInfo = $repoCampaignProducts->findOneById($selectedProducts[$key]);
                $selectedProductsRet[$key] = $productInfo->getProduct();

                $cartProduct->setProduct($productInfo);
                $cartProduct->setQuantity($currentQuantity);

                $cart->addProduct($cartProduct);
            }
        }

        $cart->removeCart();
        $cart->save();

        return array(
            'costumer' => $costumer,
            'campaign' => $currentCampaign,
            'cart' => $cart->getCart(),
            'quantity' => $quantity
        );

    }

    /**
     * @Route("/process-checkout/", name="checkout_process_checkout")
     * @Template()
     */
    public function processCheckoutAction(Request $request)
    {
        $cart = new Cart(new Session());
        $cartInformation = $cart->getCart();
        $em = $this->get('doctrine')->getManager();
        $repoProduct = $em->getRepository('SharedBundle:Product');
        $repoCampaign = $em->getRepository('SharedBundle:Campaign');
        $repoOrderStatus = $em->getRepository('SharedBundle:OrderStatus');
        $orderStatus = $repoOrderStatus->findOneByName('Pagamento Pendente');
        $campaign = $repoCampaign->findOneById($cartInformation['campaign']);

        $costumer = $this->container->get('security.context')->getToken()->getUser();
        /** @var $costumer Costumer*/
        $orderData = $request->request;
        $costumer->setPhone($orderData->get('phone'));
        $costumer->setCelphone($orderData->get('celphone'));
        $costumer->setZipCode($orderData->get('zipcode'));
        $costumer->setAddress($orderData->get('address'));
        $costumer->setComplement($orderData->get('complement'));
        $costumer->setNeighborhood($orderData->get('neighborhood'));
        $costumer->setCity($orderData->get('city'));
        $costumer->setState($orderData->get('state'));
        $costumer->setCcHolder($orderData->get('cc_id_name'));
        $costumer->setCcIdName($orderData->get('cc_id_name'));
        $costumer->setCcNumber($orderData->get('cc_number'));
        $costumer->setCcExpirationMonth($orderData->get('cc_expiration_month'));
        $costumer->setCcExpirationYear($orderData->get('cc_expiration_year'));
        $costumer->setCcSecurity($orderData->get('cc_security'));
        $costumer->setCcIdNumber($orderData->get('cc_id_number'));

        $em->persist($costumer);
        $em->flush();

        $order = new Order();
        $order->setCostumer($costumer);
        $order->setCampaign($campaign);
        foreach ($cartInformation['product'] as $productId => $productInfo) {
            $orderProduct = new OrderProduct();
            $orderProduct->setPrice($productInfo['price']);
            $orderProduct->setProductId($productId);
            $orderProduct->setQuantity($productInfo['quantity']);
            $em->persist($orderProduct);
            $order->addOrderProduct($orderProduct);
        }
        $order->setTotalPrice($cartInformation['valueTotalProducts']);
        $order->setTotalQuantity($cartInformation['totalProducts']);
        $order->addOrderStatus($orderStatus);

        $em->persist($order);
        $em->flush();

        /*$productList = array();
        foreach ($cartInformation['product'] as $productId => $cartProduct) {
            $product = $repoProduct->findOneById($productId);
            $dadosListProductCart = new DadosListaProdutoCarinho();
            $dadosListProductCart->setCode($product->getCodeSku());
            $dadosListProductCart->setQuantity($cartProduct['quantity']);
            $productList[$product->getIntegrationEnginePartner()->getId()][] = $dadosListProductCart;
        }

        foreach ($productList as $campaignId => $productDataList) {
            $calculateCart = new DadosCalcularCarrinho();
            $client = new NovaPontoComClient($campaignId);
            $calculateCart->setProducts($productDataList);
            $calculateCart->setZipCode($request->request->get('zipcode'));
            $outputCalculateCart = $client->calculateCart($calculateCart);

        }

        var_dump($outputCalculateCart);
        exit();*/
        return array();

    }

}
