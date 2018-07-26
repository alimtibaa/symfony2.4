<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_91d09a770b6637f4c0f8bb3b02fc665faa811250bc5521281d6e6423a6087712 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  54 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  807 => 634,  772 => 602,  768 => 601,  757 => 593,  752 => 591,  748 => 590,  732 => 577,  707 => 555,  702 => 553,  587 => 441,  582 => 439,  577 => 437,  572 => 435,  565 => 431,  557 => 426,  519 => 391,  515 => 390,  504 => 382,  500 => 381,  489 => 373,  485 => 372,  472 => 362,  468 => 361,  457 => 353,  453 => 352,  442 => 344,  438 => 343,  425 => 333,  421 => 332,  410 => 324,  406 => 323,  395 => 315,  391 => 314,  378 => 304,  374 => 303,  363 => 295,  359 => 294,  348 => 286,  344 => 285,  314 => 258,  305 => 252,  267 => 217,  242 => 195,  214 => 170,  189 => 148,  133 => 95,  55 => 20,  50 => 18,  46 => 17,  42 => 16,  38 => 15,  34 => 14,  19 => 1,);
    }
}
