<?php

/* partials/page.html.twig */
class __TwigTemplate_6a0879b0e7809f9aeacb0582e903cf9ea62c782b8af12b14d4c10df411fe6fbf extends Twig_Template
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
        echo "<div id=\"body-inner\">
<h1>";
        // line 2
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
<p>
\t";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"body-inner\">
<h1>{{ page.title }}</h1>
<p>
\t{{ page.content }}
</p>
</div>
", "partials/page.html.twig", "C:\\xampp\\htdocs\\sites\\grav-admin\\user\\themes\\learn2\\templates\\partials\\page.html.twig");
    }
}
