<?php

/* NomayaSocialBundle:Buttons:socialButtons.html.twig */
class __TwigTemplate_d9031a19bbd3e091c00ce7a00716725a7b58f0203e923bc65a6f5fc2f3f53d90 extends Twig_Template
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
        return array (  80 => 27,  77 => 26,  75 => 25,  72 => 24,  66 => 21,  63 => 20,  61 => 19,  58 => 18,  52 => 15,  49 => 14,  47 => 13,  44 => 12,  35 => 8,  33 => 7,  30 => 6,  24 => 3,  21 => 2,  804 => 649,  769 => 617,  765 => 616,  754 => 608,  749 => 606,  745 => 605,  729 => 592,  704 => 570,  699 => 568,  519 => 391,  515 => 390,  504 => 382,  500 => 381,  489 => 373,  485 => 372,  472 => 362,  468 => 361,  457 => 353,  453 => 352,  442 => 344,  438 => 343,  425 => 333,  421 => 332,  410 => 324,  406 => 323,  395 => 315,  391 => 314,  378 => 304,  374 => 303,  363 => 295,  359 => 294,  348 => 286,  344 => 285,  314 => 258,  305 => 252,  267 => 217,  242 => 195,  214 => 170,  189 => 148,  133 => 95,  55 => 20,  50 => 18,  46 => 17,  42 => 16,  38 => 9,  34 => 14,  19 => 1,);
    }
}