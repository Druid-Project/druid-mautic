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

/* @bundles/CoreBundle/Assets/js/libraries/4a.jquery-ui-overrides.js */
class __TwigTemplate_467d60582917b072f9c9b1442effb112 extends Template
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
        yield "// Mautic note: This seem to be an addition to the original jQuery UI library specific for Mautic. It is not part of the original library.
(function( \$ ) {
    \$.ui.ddmanager.frameOffsets = {};

    //Override droppable offsets in order to account for scrollable divs
    \$.ui.ddmanager.prepareOffsets = function (t, event) {
        var i, j,
            m = \$.ui.ddmanager.droppables[ t.options.scope ] || [],
            type = event ? event.type : null, // workaround for #2317
            list = ( t.currentItem || t.element ).find(\":data(ui-droppable)\").addBack();

        droppablesLoop: for (i = 0; i < m.length; i++) {

            // No disabled and non-accepted
            if (m[ i ].options.disabled || ( t && !m[ i ].accept.call(m[ i ].element[ 0 ], ( t.currentItem || t.element )) )) {
                continue;
            }

            // Filter out elements in the current dragged item
            for (j = 0; j < list.length; j++) {
                if (list[ j ] === m[ i ].element[ 0 ]) {
                    m[ i ].proportions().height = 0;
                    continue droppablesLoop;
                }
            }

            m[ i ].visible = m[ i ].element.css(\"display\") !== \"none\";
            if (!m[ i ].visible) {
                continue;
            }

            // Activate the droppable if used directly from draggables
            if (type === \"mousedown\") {
                m[ i ]._activate.call(m[ i ], event);
            }

            m[ i ].offset = m[ i ].element.offset();

            if (t.options.iframeId) {
                var scrollOffset = \$('#' + t.options.iframeId).contents().scrollTop();
                var newTop = m[ i ].offset.top - scrollOffset;
                m[ i ].offset = {top: newTop, left: m[ i ].offset.left};
            }

            m[ i ].proportions({width: m[ i ].element[ 0 ].offsetWidth, height: m[ i ].element[ 0 ].offsetHeight});
        }

    };
}) (jQuery);";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/js/libraries/4a.jquery-ui-overrides.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/4a.jquery-ui-overrides.js", "/app/docroot/app/bundles/CoreBundle/Assets/js/libraries/4a.jquery-ui-overrides.js");
    }
}
