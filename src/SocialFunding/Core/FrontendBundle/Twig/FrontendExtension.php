<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 3/23/14
 * Time: 8:59 PM
 */

namespace SocialFunding\Core\FrontendBundle\Twig;


class FrontendExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('price', array($this, 'priceFilter')),
            new \Twig_SimpleFilter('floor', array($this, 'floorFilter')),
        );
    }

    public function priceFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        return $price;
    }

    public function floorFilter($number)
    {
        return floor($number);
    }

    public function getName()
    {
        return 'socialfunding_extension';
    }
}