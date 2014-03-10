<?php

/* BackendBundle::layout.html.twig */
class __TwigTemplate_87c438f040305d4544bdfbf1b7f9448eab019d311e2ed3b6ad043a37f5627de6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!doctype html public \"✰\">
    <!--[if lt IE 7]> <html lang=\"en-us\" class=\"no-js ie6\"> <![endif]-->
    <!--[if IE 7]>    <html lang=\"en-us\" class=\"no-js ie7\"> <![endif]-->
    <!--[if IE 8]>    <html lang=\"en-us\" class=\"no-js ie8\"> <![endif]-->
    <!--[if IE 9]>    <html lang=\"en-us\" class=\"no-js ie9\"> <![endif]-->
    <!--[if gt IE 8]><!--> <html lang=\"en-us\" class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">

        <title>Social Funding</title>

        <!-- iPhone, iPad and Android specific settings -->

        <meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1;\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\" />
        <link rel=\"apple-touch-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/images/iOS_icon.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-startup-image\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/images/iOS_startup.png"), "html", null, true);
        echo "\">

        <!-- Styles -->

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/styles/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,700\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/fancybox/jquery.fancybox-1.3.4.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/tinyeditor/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/slidernav/slidernav.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/syntax_highlighter/styles/shCore.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/syntax_highlighter/styles/shThemeDefault.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/uitotop/css/ui.totop.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/isotope/isotope.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/elfinder/css/elfinder.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/tiptip/tipTip.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/uniform/css/uniform.aristo.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/multiselect/css/ui.multiselect.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/selectbox/jquery.selectBox.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/colorpicker/css/colorpicker.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/uistars/jquery.ui.stars.min.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/themeroller/Aristo.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/styles/text.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/styles/grid.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/styles/main.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/styles/theme/theme_base.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/styles/theme/switcher.css"), "html", null, true);
        echo "\" media=\"screen\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/styles/theme/switcher1.php?default=layout_fluid.css"), "html", null, true);
        echo "\" media=\"screen\" >
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/styles/theme/switcher2.php?default=switcher.css"), "html", null, true);
        echo "\" media=\"screen\" >
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/styles/theme/switcher3.php?default=theme_red.css"), "html", null, true);
        echo "\" media=\"screen\" >
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/styles/theme/switcher4.php?default=bg_honeycomb.css"), "html", null, true);
        echo "\" media=\"screen\" >
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/styles/theme/switcher5.php?default=switcher.css"), "html", null, true);
        echo "\" media=\"screen\" >

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/styles/buttons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/styles/ie.css"), "html", null, true);
        echo "\">

        <!-- Scripts -->

        <!-- Load JQuery -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js\" type=\"text/javascript\"></script>

        <!-- Load JQuery UI -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js\" type=\"text/javascript\"></script>

        <!-- Global -->
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/touchPunch/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/uitotop/js/jquery.ui.totop.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- Forms -->
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/autogrow/jquery.autogrowtextarea.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/multiselect/js/ui.multiselect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/selectbox/jquery.selectBox.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/timepicker/jquery.timepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/colorpicker/js/colorpicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/uistars/jquery.ui.stars.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/tiptip/jquery.tipTip.minified.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/validation/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- Configuration Script -->
        <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/adminica/adminica_ui.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/adminica/adminica_forms.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/adminica/adminica_mobile.js"), "html", null, true);
        echo "\"></script>

        <!-- Live Load (remove after development) -->
        <!-- \t\t<script>document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')</script> -->

    </head>
    <body>\t\t<div id=\"wrapper\">
    <div id=\"topbar\" class=\"clearfix\">

        <a href=\"dashboard_sorter.php\" class=\"logo\"><span>Social Funding</span></a>

        <div class=\"user_box clearfix\">
            <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/images/profile.jpg"), "html", null, true);
        echo "\" width=\"55\" alt=\"Profile Pic\" />
            <h2>Administrator</h2>
            <h3><a class=\"text_shadow\" href=\"#\">John Smith</a></h3>
            <ul>
                <li><a href=\"#\">profile</a><span class=\"divider\">|</span></li>
                <li><a href=\"#\">settings</a><span class=\"divider\">|</span></li>
                <li><a href=\"login.html\">logout</a></li>
            </ul>
        </div><!-- #user_box -->
    </div><!-- #topbar -->
    <div id=\"sidebar\">
        <div class=\"cog\">+</div>

        <a href=\"index.php\" class=\"logo\"><span>Adminica</span></a>

        <div class=\"user_box clearfix\">
            <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/images/profile.jpg"), "html", null, true);
        echo "\" width=\"55\" alt=\"Profile Pic\" />
            <h2>Administrator</h2>
            <h3><a href=\"#\">John Smith</a></h3>
            <ul>
                <li><a href=\"#\">settings</a><span class=\"divider\">|</span></li>
                <li><a href=\"login.html\">logout</a></li>
            </ul>
        </div><!-- #user_box -->

        <ul class=\"side_accordion\"> <!-- add class 'open_multiple' to change to from accordion to toggles -->
            <li><a href=\"#\"><img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/images/icons/small/grey/home.png"), "html", null, true);
        echo "\"/>Home</a>
                <ul class=\"drawer\">
                    <li><a href=\"#\">Activity</a></li>
                    <li><a href=\"#\">Events</a></li>
                    <li><a href=\"#\">Tasks</a></li>
                </ul>
            </li>
            <li><a href=\"#\"><img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/images/icons/small/grey/mail.png"), "html", null, true);
        echo "\"/>ONG<span class=\"alert badge alert_red\">";
        echo twig_escape_filter($this->env, (isset($context["allPendentCampaigns"]) ? $context["allPendentCampaigns"] : $this->getContext($context, "allPendentCampaigns")), "html", null, true);
        echo "</span></a>
                <ul class=\"drawer\">
                    <li><a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("backend_ong_index");
        echo "\">Listar</a></li>
                    <li><a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("backend_ong_list_campaigns");
        echo "?filter=new_campaign\">Campanhas Novas<span class=\"alert badge alert_grey\">";
        echo twig_escape_filter($this->env, (isset($context["allPendentCampaigns"]) ? $context["allPendentCampaigns"] : $this->getContext($context, "allPendentCampaigns")), "html", null, true);
        echo "</span></a></li>
                </ul>
            </li>
            <li><a href=\"#\"><img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/images/icons/small/grey/cog_2.png"), "html", null, true);
        echo "\"/>Settings</a>
                <ul class=\"drawer\">
                    <li><a href=\"#\">Account</a></li>
                    <li><a href=\"#\">System</a></li>
                </ul>
            </li>
        </ul>
        ";
        // line 145
        echo "            ";
        // line 146
        echo "        ";
        // line 147
        echo "    </div><!-- #sidebar -->
    <div id=\"main_container\" class=\"main_container container_16 clearfix\">
        <div id=\"nav_top\" class=\"clearfix round_top\">
            <ul class=\"clearfix\">
                <li><a href=\"index.html\"><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/images/icons/small/grey/laptop.png"), "html", null, true);
        echo "\"/></a></li>

                <li><a href=\"#\"><img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/images/icons/small/grey/users.png"), "html", null, true);
        echo "\"/><span>ONG</span></a>
                    <ul>
                        <li><a href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("backend_ong_index");
        echo "\"><span>Listar</span></a></li>
                        <li><a href=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("backend_ong_list_campaigns");
        echo "\"><span>Campanhas</span></a></li>
                    </ul>
                </li>
                <li><a href=\"#\"><img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/images/icons/small/grey/coverflow.png"), "html", null, true);
        echo "\"/><span>Costumers</span></a>
                    <ul>
                        <li><a href=\"";
        // line 161
        echo $this->env->getExtension('routing')->getPath("backend_costumer_index");
        echo "\"><span>Costumers</span></a></li>
                    </ul>
                </li>
                <li><a href=\"#\"><img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/images/icons/small/grey/create_write.png"), "html", null, true);
        echo "\"/><span>Orders</span></a>
                    <ul>
                        <li><a href=\"forms.html\"><span>Listar</span></a></li>
                    </ul>
                </li>
                <li><a href=\"login.php\" class=\"dialog_button\" data-dialog=\"logout\"><img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/images/icons/small/grey/locked_2.png"), "html", null, true);
        echo "\"/></a></li>
            </ul>
            <div class=\"display_none\">
                <div id=\"logout\" class=\"dialog_content narrow\" title=\"Logout\">
                    <div class=\"block\">
                        <div class=\"section\">
                            <h1>Thank you</h1>
                            <div class=\"dashed_line\"></div>
                            <p>We will now log you out of Adminica in a 10 seconds...</p><p></p>
                        </div>
                        <div class=\"button_bar clearfix\">
                            <button class=\"dark blue no_margin_bottom link_button\" data-link=\"login.php\">
                                <div class=\"ui-icon ui-icon-check\"></div>
                                <span>Ok</span>
                            </button>
                            <button class=\"light send_right close_dialog\">
                                <div class=\"ui-icon ui-icon-closethick\"></div>
                                <span>Cancel</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <script type=\"text/javascript\">

                var currentPage = 1 - 1; // This is only used in php to tell the nav what the current page is
                \$('#nav_top > ul > li').eq(currentPage).addClass(\"current\");
                \$('#nav_top > ul > li').addClass(\"icon_only\").children(\"a\").children(\"span\").parent().parent().removeClass(\"icon_only\");
            </script>


            <div id=\"mobile_nav\">
                <div class=\"main\"></div>
                <div class=\"side\"></div>
            </div>

        </div><!-- #nav_top -->
        <div class=\"flat_area grid_16\">
            ";
        // line 208
        $this->displayBlock('body', $context, $blocks);
        // line 210
        echo "        </div>
    </div>

    <script type=\"text/javascript\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/isotope/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/fancybox/jquery.fancybox-1.3.4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/DataTables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/adminica/adminica_datatables.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/scripts/adminica/adminica_gallery.js"), "html", null, true);
        echo "\"></script>

    <div id=\"loading_overlay\">
        <div class=\"loading_message round_bottom\">
            <img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/images/loading.gif"), "html", null, true);
        echo "\" alt=\"loading\" />
        </div>
    </div>
    </body>
</html>";
    }

    // line 208
    public function block_body($context, array $blocks = array())
    {
        // line 209
        echo "            ";
    }

    public function getTemplateName()
    {
        return "BackendBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 209,  456 => 208,  447 => 222,  440 => 218,  435 => 216,  431 => 215,  427 => 214,  423 => 213,  418 => 210,  416 => 208,  374 => 169,  366 => 164,  360 => 161,  355 => 159,  349 => 156,  345 => 155,  340 => 153,  335 => 151,  329 => 147,  327 => 146,  325 => 145,  315 => 137,  307 => 134,  303 => 133,  296 => 131,  286 => 124,  273 => 114,  254 => 98,  239 => 86,  235 => 85,  231 => 84,  225 => 81,  221 => 80,  217 => 79,  213 => 78,  209 => 77,  205 => 76,  201 => 75,  197 => 74,  193 => 73,  187 => 70,  183 => 69,  169 => 58,  165 => 57,  160 => 55,  156 => 54,  152 => 53,  148 => 52,  144 => 51,  140 => 50,  135 => 48,  131 => 47,  127 => 46,  123 => 45,  118 => 43,  113 => 41,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  93 => 36,  88 => 34,  84 => 33,  80 => 32,  76 => 31,  72 => 30,  68 => 29,  64 => 28,  60 => 27,  56 => 26,  43 => 19,  39 => 18,  20 => 1,  75 => 26,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  50 => 23,  46 => 17,  31 => 4,  28 => 3,);
    }
}
