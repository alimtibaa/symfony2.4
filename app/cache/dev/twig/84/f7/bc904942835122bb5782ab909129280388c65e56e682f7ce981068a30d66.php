<?php

/* NomayaSocialBundle:Buttons:facebookButton.html.twig */
class __TwigTemplate_84f7bc904942835122bb5782ab909129280388c65e56e682f7ce981068a30d66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((!array_key_exists("url", $context)) || ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) == null))) {
            // line 2
            echo "    ";
            $context["url"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "uri");
        }
        // line 4
        echo "
";
        // line 5
        ob_start();
        // line 6
        echo " ";
        // line 7
        echo " <div id=\"fb-root\"></div>
 <script>(function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = \"//connect.facebook.net/";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "/all.js#xfbml=1\";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));</script>

 <div class=\"fb-like\" data-href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" data-send=\"";
        echo twig_escape_filter($this->env, (isset($context["send"]) ? $context["send"] : $this->getContext($context, "send")), "html", null, true);
        echo "\" data-layout=\"";
        echo twig_escape_filter($this->env, (isset($context["layout"]) ? $context["layout"] : $this->getContext($context, "layout")), "html", null, true);
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" data-show-faces=\"";
        echo twig_escape_filter($this->env, (isset($context["showFaces"]) ? $context["showFaces"] : $this->getContext($context, "showFaces")), "html", null, true);
        echo "\" data-share=\"";
        echo twig_escape_filter($this->env, (isset($context["share"]) ? $context["share"] : $this->getContext($context, "share")), "html", null, true);
        echo "\"></div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Buttons:facebookButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 12,  32 => 7,  28 => 5,  25 => 4,  80 => 27,  77 => 26,  75 => 25,  72 => 24,  66 => 21,  63 => 20,  61 => 19,  58 => 18,  52 => 15,  49 => 14,  47 => 13,  44 => 12,  35 => 8,  33 => 7,  30 => 6,  24 => 3,  21 => 2,  815 => 648,  780 => 616,  776 => 615,  765 => 607,  760 => 605,  756 => 604,  740 => 591,  715 => 569,  710 => 567,  672 => 532,  556 => 419,  552 => 418,  541 => 410,  537 => 409,  526 => 401,  522 => 400,  509 => 390,  505 => 389,  494 => 381,  490 => 380,  479 => 372,  475 => 371,  462 => 361,  458 => 360,  447 => 352,  443 => 351,  432 => 343,  428 => 342,  415 => 332,  411 => 331,  400 => 323,  396 => 322,  385 => 314,  381 => 313,  355 => 290,  345 => 283,  335 => 276,  325 => 269,  315 => 262,  305 => 255,  267 => 220,  242 => 198,  214 => 173,  189 => 151,  55 => 20,  50 => 18,  46 => 16,  42 => 16,  38 => 9,  34 => 14,  19 => 1,);
    }
}
