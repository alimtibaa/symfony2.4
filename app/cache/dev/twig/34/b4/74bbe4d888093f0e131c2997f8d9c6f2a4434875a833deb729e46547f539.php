<?php

/* NomayaSocialBundle:Buttons:socialButtons.html.twig */
class __TwigTemplate_34b474bbe4d888093f0e131c2997f8d9c6f2a4434875a833deb729e46547f539 extends Twig_Template
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
        if ((array_key_exists("facebook", $context) && (!((isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")) === false)))) {
            // line 2
            echo "    <span class=\"button facebookButton col-xs-2 col-xs-offset-1\">
      ";
            // line 3
            echo $this->env->getExtension('nomaya_social_bar')->getFacebookLikeButton((isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")));
            echo "
    </span>
";
        }
        // line 6
        echo "
";
        // line 7
        if ((array_key_exists("googleplus", $context) && (!((isset($context["googleplus"]) ? $context["googleplus"] : $this->getContext($context, "googleplus")) === false)))) {
            // line 8
            echo "    <span class=\"button googleplus col-xs-2\">
      ";
            // line 9
            echo $this->env->getExtension('nomaya_social_bar')->getGoogleplusButton((isset($context["googleplus"]) ? $context["googleplus"] : $this->getContext($context, "googleplus")));
            echo "
    </span>
";
        }
        // line 12
        echo "
";
        // line 13
        if ((array_key_exists("twitter", $context) && (!((isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")) === false)))) {
            // line 14
            echo "    <span class=\"button twitterButton col-xs-2\">
      ";
            // line 15
            echo $this->env->getExtension('nomaya_social_bar')->getTwitterButton((isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")));
            echo "
    </span>
";
        }
        // line 18
        echo "
";
        // line 19
        if ((array_key_exists("linkedin", $context) && (!((isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")) === false)))) {
            // line 20
            echo "    <span class=\"button linkedinButton col-xs-2\">
      ";
            // line 21
            echo $this->env->getExtension('nomaya_social_bar')->getLinkedinButton((isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")));
            echo "
    </span>
";
        }
        // line 24
        echo "
";
        // line 25
        if ((array_key_exists("pinterest", $context) && (!((isset($context["pinterest"]) ? $context["pinterest"] : $this->getContext($context, "pinterest")) === false)))) {
            // line 26
            echo "    <span class=\"button linkedinButton col-xs-2\">
      ";
            // line 27
            echo $this->env->getExtension('nomaya_social_bar')->getPinterestButton((isset($context["pinterest"]) ? $context["pinterest"] : $this->getContext($context, "pinterest")));
            echo "
    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Buttons:socialButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  77 => 26,  75 => 25,  72 => 24,  66 => 21,  63 => 20,  61 => 19,  58 => 18,  52 => 15,  49 => 14,  47 => 13,  44 => 12,  35 => 8,  33 => 7,  30 => 6,  24 => 3,  21 => 2,  815 => 648,  780 => 616,  776 => 615,  765 => 607,  760 => 605,  756 => 604,  740 => 591,  715 => 569,  710 => 567,  672 => 532,  556 => 419,  552 => 418,  541 => 410,  537 => 409,  526 => 401,  522 => 400,  509 => 390,  505 => 389,  494 => 381,  490 => 380,  479 => 372,  475 => 371,  462 => 361,  458 => 360,  447 => 352,  443 => 351,  432 => 343,  428 => 342,  415 => 332,  411 => 331,  400 => 323,  396 => 322,  385 => 314,  381 => 313,  355 => 290,  345 => 283,  335 => 276,  325 => 269,  315 => 262,  305 => 255,  267 => 220,  242 => 198,  214 => 173,  189 => 151,  55 => 20,  50 => 18,  46 => 17,  42 => 16,  38 => 9,  34 => 14,  19 => 1,);
    }
}