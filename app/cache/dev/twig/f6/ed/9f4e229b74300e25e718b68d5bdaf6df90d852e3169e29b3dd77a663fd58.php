<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f6ed9f4e229b74300e25e718b68d5bdaf6df90d852e3169e29b3dd77a663fd58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    <script>
        function goLogIn(){
            window.location.href = \"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("_security_check_fb");
        echo "\";
        }

        function onFbInit() {
            if (typeof(FB) != 'undefined' && FB != null ) {
                FB.Event.subscribe(\"auth.logout\", function() {
                    window.location.href = \"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("_security_logout");
        echo "\";
                });
                FB.Event.subscribe('auth.statusChange', function(response) {
                    if (response.session || response.authResponse) {
                        setTimeout(goLogIn, 500);
                    } else {
                        window.location.href = \"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("_security_logout");
        echo "\";
                    }
                });
            }
        }
    </script>
    ";
        // line 24
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "fbAsyncInit" => "onFbInit();"));
        echo "
";
        // line 25
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 26
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 28
        echo "<h2 class=\"registration-sub-title\">LOGIN</h2>

    <div class=\"login-main-block\" style=\"width: 650px; margin: 0 auto;\">
        <div class=\"login-left-block\" style=\"float: left; width: 300px; height: 600px; margin-right: 35px; background: #f5f5f5;\">
            <h3 class=\"login-block-title\">DOADOR</h3>
            ";
        // line 33
        echo $this->env->getExtension('facebook')->renderLoginButton(array("autologoutlink" => true));
        echo "
        </div>
        <div class=\"login-right-block\" style=\"float: left; width: 300px; height: 600px; background: #f5f5f5;\">
            <h3 class=\"login-block-title\" style=\"font-size: 26px; margin-top: 15px;\">ONG</h3>
            <form action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <div class=\"main-cadastro-ong-line\">
                    <span class=\"main-cadastro-ong-label\">
                        <label for=\"username\">Email</label>
                    </span>
                    <div class=\"main-cadastro-ong-input\">
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                    </div>
                </div>
                <div class=\"clearAll\"></div>
                <div class=\"main-cadastro-ong-line\">
                    <span class=\"main-cadastro-ong-label\">
                        <label for=\"password\">Senha</label>
                    </span>
                    <div class=\"main-cadastro-ong-input\">
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    </div>
                </div>
                <div class=\"clearAll\"></div>
                <span class=\"forgot-password\">Esqueci minha senha</span>
                <div class=\"buttonLine\">
                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"login-button\" value=\"Entrar\" />
                </div>
                <div class=\"clearAll\"></div>
                <div class=\"buttonLine-registration\">
                    <div class=\"clearAll\"></div>
                    <a href=\"#\" class=\"registration-button\">Cadastrar ONG</a>
                </div>
            </form>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 45,  92 => 38,  88 => 37,  81 => 33,  74 => 28,  68 => 26,  66 => 25,  62 => 24,  53 => 18,  44 => 12,  35 => 6,  31 => 4,  28 => 3,);
    }
}
