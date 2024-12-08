<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @Marketplace/Package/remove.html.twig */
class __TwigTemplate_b453ffefa928cf82db2ea610bbc7f8cd extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"text-center\" id=\"marketplace-removal-in-progress\">
    <p>";
        // line 2
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.remove.html.in.progress", ["%packagename%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 2, $this->source); })()), "packageBase", [], "any", false, false, false, 2), "getHumanPackageName", [], "method", false, false, false, 2)]));
        yield "</p>
    <div class=\"spinner\">
        <i class=\"ri-loader-3-line ri-spin\"></i>
    </div>
</div>
<div style=\"display: none\" class=\"text-center\" id=\"marketplace-removal-failed\">
    <p>";
        // line 8
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.remove.html.failed", ["%packagename%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 8, $this->source); })()), "packageBase", [], "any", false, false, false, 8), "getHumanPackageName", [], "method", false, false, false, 8)]));
        yield "</p>
    <textarea class=\"form-control\" readonly id=\"marketplace-removal-failed-details\"></textarea>
</div>
<div style=\"display: none\" class=\"text-center\" id=\"marketplace-removal-success\">
    <p>";
        // line 12
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.remove.html.success", ["%packagename%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 12, $this->source); })()), "packageBase", [], "any", false, false, false, 12), "getHumanPackageName", [], "method", false, false, false, 12)]));
        yield "</p>
    <p><a class=\"btn btn-primary\" href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(Twig\Extension\CoreExtension::constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_LIST"));
        yield "\">
    ";
        // line 14
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.remove.html.success.continue", [], "messages");
        yield "</a></p>
</div>

<script>
    const removePackageResetView = () => {
        mQuery('#marketplace-removal-in-progress').show();
        mQuery('#marketplace-removal-success').hide();
        mQuery('#marketplace-removal-failed').hide();
    }

    removePackageResetView();

    Mautic.Marketplace.removePackage(
        '";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 27, $this->source); })()), "packageBase", [], "any", false, false, false, 27), "getVendorName", [], "method", false, false, false, 27));
        yield "',
        '";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 28, $this->source); })()), "packageBase", [], "any", false, false, false, 28), "getPackageName", [], "method", false, false, false, 28));
        yield "',
        (response) => {
            if (response.success) {
                mQuery('#marketplace-removal-in-progress').hide();
                mQuery('#marketplace-removal-success').show();
            } else if (response.redirect) {
                window.location = response.redirect;
            }
        },
        (request, textStatus, errorThrown) => {
            let error;

            try {
                const res = JSON.parse(request.responseText);
                if (res.error) {
                    error = res.error;
                } else {
                    error = res.errors[0].message ?? 'Unknown error';
                }
            } catch (e) {
                error = 'An unknown error occurred. Please check the logs for more details.';
                console.error(request.responseText);
                console.error(e);
            }
            
            mQuery('#marketplace-removal-in-progress').hide();
            mQuery('#marketplace-removal-failed').show();
            mQuery('#marketplace-removal-failed-details').text(error);
        }
    );
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Marketplace/Package/remove.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  89 => 28,  85 => 27,  69 => 14,  65 => 13,  61 => 12,  54 => 8,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Marketplace/Package/remove.html.twig", "/app/docroot/app/bundles/MarketplaceBundle/Resources/views/Package/remove.html.twig");
    }
}
