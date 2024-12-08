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

/* @bundles/EmailBundle/Assets/js/batch.js */
class __TwigTemplate_8e2477d7ba4ceba7dac56c5caea831fe extends Template
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
        yield "//EmailBundle (Copied from app/bundles/LeadBundle/Assets/js/lead.js)
Mautic.emailBatchSubmit = function() {
    if (Mautic.batchActionPrecheck(\"\")) {
        if (mQuery('#email_batch_newCategory').val()) {
            const \$emailBatchIds = mQuery('#email_batch_ids');
            if (\$emailBatchIds.length) {
                \$emailBatchIds.val(Mautic.getCheckedListIds(false, true));
            }

            return true;
        }

    }

    return false;
};

function setCategory(id, newCategory) {
    const tr = document.querySelector(\"#row_email_\" + id);
    const div = tr.querySelector(\"div.d-flex.ai-center.gap-xs\");
    const span = div.querySelector(\"span\");

    div.textContent = newCategory.name;
    span.style = \"background: #\" + newCategory.color + \";\"

    div.prepend(span);
}

Mautic.emailBatchSubmitCallback = function( response ) {
    mQuery('#MauticSharedModal').modal('hide');
    console.log(\"Received: \" + JSON.stringify(response));
    response.affected.forEach( function(id){
        setCategory(id, response.newCategory);
    });
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/Assets/js/batch.js";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/EmailBundle/Assets/js/batch.js", "/app/docroot/app/bundles/EmailBundle/Assets/js/batch.js");
    }
}
