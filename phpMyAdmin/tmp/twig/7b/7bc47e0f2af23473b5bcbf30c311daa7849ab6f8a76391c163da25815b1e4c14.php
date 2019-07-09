<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* database/designer/edit_delete_pages.twig */
class __TwigTemplate_71332712af04522158fc274f5456edd83903632d96caa770d4b47907262caf93 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<form action=\"db_designer.php\" method=\"post\" name=\"edit_delete_pages\" id=\"edit_delete_pages\" class=\"ajax\">
    ";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        echo "
    <fieldset id=\"page_edit_delete_options\">
        <input type=\"hidden\" name=\"operation\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["operation"] ?? null), "html", null, true);
        echo "\" />
        <label for=\"selected_page\">
            ";
        // line 6
        echo twig_escape_filter($this->env, (((($context["operation"] ?? null) == "editPage")) ? (_gettext("Page to open")) : (_gettext("Page to delete"))), "html", null, true);
        echo ":
        </label>
        ";
        // line 8
        $this->loadTemplate("database/designer/page_selector.twig", "database/designer/edit_delete_pages.twig", 8)->display(twig_to_array(["pdfwork" =>         // line 9
($context["pdfwork"] ?? null), "pages" =>         // line 10
($context["pages"] ?? null)]));
        // line 12
        echo "    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "database/designer/edit_delete_pages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  50 => 10,  49 => 9,  48 => 8,  43 => 6,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/designer/edit_delete_pages.twig", "C:\\xampp\\phpMyAdmin\\templates\\database\\designer\\edit_delete_pages.twig");
    }
}
