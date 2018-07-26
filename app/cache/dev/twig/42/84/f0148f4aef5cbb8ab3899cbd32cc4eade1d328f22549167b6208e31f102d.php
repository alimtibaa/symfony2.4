<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_4284f0148f4aef5cbb8ab3899cbd32cc4eade1d328f22549167b6208e31f102d extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  26 => 5,  87 => 20,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 16,  54 => 21,  43 => 8,  40 => 8,  33 => 10,  30 => 3,  807 => 634,  772 => 602,  768 => 601,  757 => 593,  752 => 591,  748 => 590,  732 => 577,  707 => 555,  702 => 553,  587 => 441,  582 => 439,  577 => 437,  572 => 435,  565 => 431,  557 => 426,  519 => 391,  515 => 390,  504 => 382,  500 => 381,  489 => 373,  485 => 372,  472 => 362,  468 => 361,  457 => 353,  453 => 352,  442 => 344,  438 => 343,  425 => 333,  421 => 332,  410 => 324,  406 => 323,  395 => 315,  391 => 314,  378 => 304,  374 => 303,  363 => 295,  359 => 294,  348 => 286,  344 => 285,  314 => 258,  305 => 252,  267 => 217,  242 => 195,  214 => 170,  189 => 148,  133 => 55,  55 => 13,  50 => 8,  46 => 7,  42 => 14,  38 => 13,  34 => 14,  19 => 1,);
    }
}
