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

/* @bundles/EmailBundle/Assets/js/send.example.js */
class __TwigTemplate_a629c1f369d41f2f276cb7f4ba0cd4c1 extends Template
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
        yield "/**
 * Used in data-lookup-callback attr of form field in ExampleSendType
 * Take a look at https://github.com/twitter/typeahead.js/
 */
Mautic.activateContactLookupField = function(fieldOptions, filterId) {

    const lookupElementId = 'example_send_contact';
    const action          = mQuery('#'+ lookupElementId).attr('data-chosen-lookup');

    const options = {
        limit: 20,
        'searchKey': 'lead.lead',
    };

    Mautic.activateFieldTypeahead(lookupElementId, filterId, options, action);

    mQuery('#'+ lookupElementId).on(\"change\",function(event) {
        if (event.target.value === '') {
            // Delete selected contact ID from hidden field
            mQuery('#example_send_contact_id').val('');
        }
    });
};

/**
 * Used in data-lookup-callback attr of form field in ExampleSendType
 */
Mautic.updateContactLookupListFilter = function(field, item) {
    if (item && item.id) {
        mQuery('#example_send_contact_id').val(item.id);
        mQuery(field).val(item.value);
    }
};
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/Assets/js/send.example.js";
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
        return new Source("", "@bundles/EmailBundle/Assets/js/send.example.js", "/app/docroot/app/bundles/EmailBundle/Assets/js/send.example.js");
    }
}
