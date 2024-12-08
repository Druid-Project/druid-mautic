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

/* @themes/@defaults/html/message.html.twig */
class __TwigTemplate_0bbede9ca3a1980ab6f88a0fb7309eb9 extends Template
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

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@themes/@defaults/html/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@themes/@defaults/html/base.html.twig", "@themes/@defaults/html/message.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<style>
    /*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%
}

body {
    margin: 0
}

footer {
    display: block
}

[hidden] {
    display: none
}

h1 {
    margin: .67em 0;
    font-size: 2em
}

small {
    font-size: 80%
}

hr {
    height: 0;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box
}

button,
input,
select {
    margin: 0;
    font: inherit;
    color: inherit
}

button {
    overflow: visible
}

button,
select {
    text-transform: none
}

button,
html input[type=button],
input[type=reset],
input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer
}

button[disabled],
html input[disabled] {
    cursor: default
}

button::-moz-focus-inner,
input::-moz-focus-inner {
    padding: 0;
    border: 0
}

input {
    line-height: normal
}

input[type=checkbox],
input[type=radio] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    height: auto
}

input[type=search] {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-appearance: textfield
}

input[type=search]::-webkit-search-cancel-button,
input[type=search]::-webkit-search-decoration {
    -webkit-appearance: none
}

table {
    border-spacing: 0;
    border-collapse: collapse
}

td {
    padding: 0
}

/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
@media print {

    *,
    :after,
    :before {
        color: #000 !important;
        text-shadow: none !important;
        background: 0 0 !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    tr {
        page-break-inside: avoid
    }

    h2,
    h3 {
        orphans: 3;
        widows: 3
    }

    h2,
    h3 {
        page-break-after: avoid
    }

    .label {
        border: 1px solid #000
    }

    .table {
        border-collapse: collapse !important
    }

    .table td {
        background-color: #fff !important
    }
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

:after,
:before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

html {
    font-size: 10px;
    -webkit-tap-highlight-color: transparent
}

body {
    font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff
}

button,
input,
select {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}

hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee
}

[role=button] {
    cursor: pointer
}

.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit
}

.h1,
.h2,
.h3,
h1,
h2,
h3 {
    margin-top: 20px;
    margin-bottom: 10px
}

.h4,
.h5,
.h6,
h4,
h5,
h6 {
    margin-top: 10px;
    margin-bottom: 10px
}

.h1,
h1 {
    font-size: 36px
}

.h2,
h2 {
    font-size: 30px
}

.h3,
h3 {
    font-size: 24px
}

.h4,
h4 {
    font-size: 18px
}

.h5,
h5 {
    font-size: 14px
}

.h6,
h6 {
    font-size: 12px
}

.lead {
    margin-bottom: 20px;
    font-size: 16px;
    font-weight: 300;
    line-height: 1.4
}

@media (min-width:768px) {
    .lead {
        font-size: 21px
    }
}

.small,
small {
    font-size: 85%
}

.text-left {
    text-align: left
}

.text-center {
    text-align: center;
}

.text-muted {
    color: #777
}

.container {
    display: flex;
    flex-direction: column;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

@media (min-width:768px) {
    .container {
        width: 750px
    }
}

@media (min-width:992px) {
    .container {
        width: 970px
    }
}

@media (min-width:1200px) {
    .container {
        width: 1170px
    }
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px
}

.row>* {
    box-sizing: border-box;
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
}

.fs-16 {
    font-size: 16px;
}

.col-md-1,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-xs-1,
.col-xs-10,
.col-xs-11,
.col-xs-12,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px
}

.col-xs-1,
.col-xs-10,
.col-xs-11,
.col-xs-12,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9 {
    float: left
}

.col-xs-12 {
    width: 100%
}

.col-xs-11 {
    width: 91.66666667%
}

.col-xs-10 {
    width: 83.33333333%
}

.col-xs-9 {
    width: 75%
}

.col-xs-8 {
    width: 66.66666667%
}

.col-xs-7 {
    width: 58.33333333%
}

.col-xs-6 {
    width: 50%
}

.col-xs-5 {
    width: 41.66666667%
}

.col-xs-4 {
    width: 33.33333333%
}

.col-xs-3 {
    width: 25%
}

.col-xs-2 {
    width: 16.66666667%
}

.col-xs-1 {
    width: 8.33333333%
}

.col-xs-offset-12 {
    margin-left: 100%
}

.col-xs-offset-11 {
    margin-left: 91.66666667%
}

.col-xs-offset-10 {
    margin-left: 83.33333333%
}

.col-xs-offset-9 {
    margin-left: 75%
}

.col-xs-offset-8 {
    margin-left: 66.66666667%
}

.col-xs-offset-7 {
    margin-left: 58.33333333%
}

.col-xs-offset-6 {
    margin-left: 50%
}

.col-xs-offset-5 {
    margin-left: 41.66666667%
}

.col-xs-offset-4 {
    margin-left: 33.33333333%
}

.col-xs-offset-3 {
    margin-left: 25%
}

.col-xs-offset-2 {
    margin-left: 16.66666667%
}

.col-xs-offset-1 {
    margin-left: 8.33333333%
}

.col-xs-offset-0 {
    margin-left: 0
}

@media (min-width:992px) {

    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9 {
        float: left
    }

    .col-md-12 {
        width: 100%
    }

    .col-md-11 {
        width: 91.66666667%
    }

    .col-md-10 {
        width: 83.33333333%
    }

    .col-md-9 {
        width: 75%
    }

    .col-md-8 {
        width: 66.66666667%
    }

    .col-md-7 {
        width: 58.33333333%
    }

    .col-md-6 {
        width: 50%
    }

    .col-md-5 {
        width: 41.66666667%
    }

    .col-md-4 {
        width: 33.33333333%
    }

    .col-md-3 {
        width: 25%
    }

    .col-md-2 {
        width: 16.66666667%
    }

    .col-md-1 {
        width: 8.33333333%
    }

    .col-md-offset-12 {
        margin-left: 100%
    }

    .col-md-offset-11 {
        margin-left: 91.66666667%
    }

    .col-md-offset-10 {
        margin-left: 83.33333333%
    }

    .col-md-offset-9 {
        margin-left: 75%
    }

    .col-md-offset-8 {
        margin-left: 66.66666667%
    }

    .col-md-offset-7 {
        margin-left: 58.33333333%
    }

    .col-md-offset-6 {
        margin-left: 50%
    }

    .col-md-offset-5 {
        margin-left: 41.66666667%
    }

    .col-md-offset-4 {
        margin-left: 33.33333333%
    }

    .col-md-offset-3 {
        margin-left: 25%
    }

    .col-md-offset-2 {
        margin-left: 16.66666667%
    }

    .col-md-offset-1 {
        margin-left: 8.33333333%
    }

    .col-md-offset-0 {
        margin-left: 0
    }
}

table {
    background-color: transparent
}

.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px
}

.table>tbody>tr>td {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd
}

.table>tbody+tbody {
    border-top: 2px solid #ddd
}

.table .table {
    background-color: #fff
}

.table-hover>tbody>tr:hover {
    background-color: #f5f5f5
}

table col[class*=col-] {
    position: static;
    display: table-column;
    float: none
}

table td[class*=col-] {
    position: static;
    display: table-cell;
    float: none
}

.table-hover>tbody>tr:hover>.active {
    background-color: #e8e8e8
}

.table-hover>tbody>tr:hover>.success {
    background-color: #d0e9c6
}

.table-hover>tbody>tr:hover>.info {
    background-color: #c4e3f3
}

.table-hover>tbody>tr:hover>.warning {
    background-color: #faf2cc
}

.table-hover>tbody>tr:hover>.danger {
    background-color: #ebcccc
}

label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700
}

input[type=search] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

input[type=checkbox],
input[type=radio] {
    margin: 4px 0 0;
    line-height: normal
}

input[type=file] {
    display: block
}

input[type=range] {
    display: block;
    width: 100%
}

select[multiple],
select[size] {
    height: auto
}

input[type=checkbox]:focus,
input[type=file]:focus,
input[type=radio]:focus {
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px
}

.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
}

.form-control:focus {
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
}

.form-control::-moz-placeholder {
    color: #999;
    opacity: 1
}

.form-control:-ms-input-placeholder {
    color: #999
}

.form-control::-webkit-input-placeholder {
    color: #999
}

.form-control::-ms-expand {
    background-color: transparent;
    border: 0
}

.form-control[disabled],
.form-control[readonly] {
    background-color: #eee;
    opacity: 1
}

.form-control[disabled] {
    cursor: not-allowed
}

input[type=search] {
    -webkit-appearance: none
}

@media screen and (-webkit-min-device-pixel-ratio:0) {

    input[type=date].form-control,
    input[type=datetime-local].form-control,
    input[type=month].form-control,
    input[type=time].form-control {
        line-height: 34px
    }
}

.form-group {
    margin-bottom: 15px
}

.checkbox {
    position: relative;
    display: block;
    margin-top: 10px;
    margin-bottom: 10px
}

.checkbox label {
    min-height: 20px;
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer
}

.checkbox input[type=checkbox] {
    position: absolute;
    margin-left: -20px
}

.checkbox+.checkbox {
    margin-top: -5px
}

input[type=checkbox][disabled],
input[type=radio][disabled] {
    cursor: not-allowed
}

.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px
}

.btn:active.focus,
.btn:active:focus,
.btn:focus {
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px
}

.btn:focus,
.btn:hover {
    color: #333;
    text-decoration: none
}

.btn:active {
    background-image: none;
    outline: 0;
    -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
}

.btn[disabled] {
    cursor: not-allowed;
    -webkit-box-shadow: none;
    box-shadow: none;
    opacity: .65
}

.btn-default {
    color: #333;
    background-color: #fff;
    border-color: #ccc
}

.btn-default:focus {
    color: #333;
    background-color: #e6e6e6;
    border-color: #8c8c8c
}

.btn-default:hover {
    color: #333;
    background-color: #e6e6e6;
    border-color: #adadad
}

.btn-default:active {
    color: #333;
    background-color: #e6e6e6;
    border-color: #adadad
}

.btn-default:active.focus,
.btn-default:active:focus,
.btn-default:active:hover {
    color: #333;
    background-color: #d4d4d4;
    border-color: #8c8c8c
}

.btn-default:active {
    background-image: none
}

.btn-default[disabled]:focus,
.btn-default[disabled]:hover {
    background-color: #fff;
    border-color: #ccc
}

.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4
}

.btn-primary:focus {
    color: #fff;
    background-color: #286090;
    border-color: #122b40
}

.btn-primary:hover {
    color: #fff;
    background-color: #286090;
    border-color: #204d74
}

.btn-primary:active {
    color: #fff;
    background-color: #286090;
    border-color: #204d74
}

.btn-primary:active.focus,
.btn-primary:active:focus,
.btn-primary:active:hover {
    color: #fff;
    background-color: #204d74;
    border-color: #122b40
}

.btn-primary:active {
    background-image: none
}

.btn-primary[disabled]:focus,
.btn-primary[disabled]:hover {
    background-color: #337ab7;
    border-color: #2e6da4
}

.btn-group-xs>.btn,
.btn-xs {
    padding: 1px 5px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px
}

.btn-group {
    position: relative;
    display: inline-block;
    vertical-align: middle
}

.btn-group>.btn {
    position: relative;
    float: left
}

.btn-group>.btn:active,
.btn-group>.btn:focus,
.btn-group>.btn:hover {
    z-index: 2
}

.btn-group .btn+.btn,
.btn-group .btn+.btn-group,
.btn-group .btn-group+.btn,
.btn-group .btn-group+.btn-group {
    margin-left: -1px
}

.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
    border-radius: 0
}

.btn-group>.btn:first-child {
    margin-left: 0
}

.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.btn-group>.btn:last-child:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group>.btn-group {
    float: left
}

.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
    border-radius: 0
}

.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

[data-toggle=buttons]>.btn input[type=checkbox],
[data-toggle=buttons]>.btn input[type=radio],
[data-toggle=buttons]>.btn-group>.btn input[type=checkbox],
[data-toggle=buttons]>.btn-group>.btn input[type=radio] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none
}

.input-group {
    position: relative;
    display: table;
    border-collapse: separate
}

.input-group[class*=col-] {
    float: none;
    padding-right: 0;
    padding-left: 0
}

.input-group .form-control {
    position: relative;
    z-index: 2;
    float: left;
    width: 100%;
    margin-bottom: 0
}

.input-group .form-control:focus {
    z-index: 3
}

.input-group .form-control,
.input-group-btn {
    display: table-cell
}

.input-group .form-control:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child) {
    border-radius: 0
}

.input-group-btn {
    width: 1%;
    white-space: nowrap;
    vertical-align: middle
}

.input-group .form-control:first-child,
.input-group-btn:first-child>.btn,
.input-group-btn:first-child>.btn-group>.btn,
.input-group-btn:first-child>.dropdown-toggle,
.input-group-btn:last-child>.btn-group:not(:last-child)>.btn,
.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group .form-control:last-child,
.input-group-btn:first-child>.btn-group:not(:first-child)>.btn,
.input-group-btn:first-child>.btn:not(:first-child),
.input-group-btn:last-child>.btn,
.input-group-btn:last-child>.btn-group>.btn,
.input-group-btn:last-child>.dropdown-toggle {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.input-group-btn {
    position: relative;
    font-size: 0;
    white-space: nowrap
}

.input-group-btn>.btn {
    position: relative
}

.input-group-btn>.btn+.btn {
    margin-left: -1px
}

.input-group-btn>.btn:active,
.input-group-btn>.btn:focus,
.input-group-btn>.btn:hover {
    z-index: 2
}

.input-group-btn:first-child>.btn,
.input-group-btn:first-child>.btn-group {
    margin-right: -1px
}

.input-group-btn:last-child>.btn,
.input-group-btn:last-child>.btn-group {
    z-index: 2;
    margin-left: -1px
}

.label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em
}

.label:empty {
    display: none
}

.btn .label {
    position: relative;
    top: -1px
}

.label-default {
    background-color: #777
}

.label-default[href]:focus,
.label-default[href]:hover {
    background-color: #5e5e5e
}

.label-primary {
    background-color: #337ab7
}

.label-primary[href]:focus,
.label-primary[href]:hover {
    background-color: #286090
}

@-webkit-keyframes progress-bar-stripes {
    from {
        background-position: 40px 0
    }

    to {
        background-position: 0 0
    }
}

@-o-keyframes progress-bar-stripes {
    from {
        background-position: 40px 0
    }

    to {
        background-position: 0 0
    }
}

@keyframes progress-bar-stripes {
    from {
        background-position: 40px 0
    }

    to {
        background-position: 0 0
    }
}

.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
}

.panel-body {
    padding: 15px
}

.panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px
}

.panel-title {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 16px;
    color: inherit
}

.panel-title>.small,
.panel-title>small {
    color: inherit
}

.panel-footer {
    padding: 10px 15px;
    background-color: #f5f5f5;
    border-top: 1px solid #ddd;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px
}

.panel>.table {
    margin-bottom: 0
}

.panel>.table:first-child {
    border-top-left-radius: 3px;
    border-top-right-radius: 3px
}

.panel>.table:first-child>tbody:first-child>tr:first-child,
.panel>.table:first-child>thead:first-child>tr:first-child {
    border-top-left-radius: 3px;
    border-top-right-radius: 3px
}

.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,
.panel>.table:first-child>thead:first-child>tr:first-child td:first-child {
    border-top-left-radius: 3px
}

.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,
.panel>.table:first-child>thead:first-child>tr:first-child td:last-child {
    border-top-right-radius: 3px
}

.panel>.table:last-child {
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px
}

.panel>.table:last-child>tbody:last-child>tr:last-child,
.panel>.table:last-child>tfoot:last-child>tr:last-child {
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px
}

.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,
.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child {
    border-bottom-left-radius: 3px
}

.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,
.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child {
    border-bottom-right-radius: 3px
}

.panel>.panel-body+.table,
.panel>.table+.panel-body {
    border-top: 1px solid #ddd
}

.panel>.table>tbody:first-child>tr:first-child td {
    border-top: 0
}

.panel-group {
    margin-bottom: 20px
}

.panel-group .panel {
    margin-bottom: 0;
    border-radius: 4px
}

.panel-group .panel+.panel {
    margin-top: 5px
}

.panel-group .panel-heading {
    border-bottom: 0
}

.panel-group .panel-footer {
    border-top: 0
}

.panel-default {
    border-color: #ddd
}

.panel-default>.panel-heading {
    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd
}

.panel-primary {
    border-color: #337ab7
}

.panel-primary>.panel-heading {
    color: #fff;
    background-color: #337ab7;
    border-color: #337ab7
}

.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
    font-size: 12px;
    font-style: normal;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    word-wrap: normal;
    white-space: normal;
    opacity: 0;
    line-break: auto
}

.tooltip.top {
    padding: 5px 0;
    margin-top: -3px
}

.tooltip.left {
    padding: 0 5px;
    margin-left: -3px
}

.container:after,
.container:before,
.panel-body:after,
.panel-body:before,
.row:after,
.row:before {
    display: table;
    content: \" \"
}

.container:after,
.panel-body:after,
.row:after {
    clear: both
}

.hidden {
    display: none !important
}

@media (max-width:767px) {
    .hidden-xs {
        display: none !important
    }
}

@media (min-width:992px) and (max-width:1199px) {
    .hidden-md {
        display: none !important
    }
}
.min-h-100vh {min-height: 100vh;}
.jc-center {justify-content: center;}
.mb-md {margin-bottom: 15px;}
.as-center {align-self: center;}
</style>
<div class=\"container min-h-100vh jc-center\">

    ";
        // line 1393
        if (CoreExtension::inFilter("form", (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 1393, $this->source); })()))) {
            // line 1394
            yield "    <!-- Default preference center -->
    <div class=\"row text-center as-center mb-md\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"64\" height=\"64\" fill=\"currentColor\"><path d=\"M20 7.23792L12.0718 14.338L4 7.21594V19H14V21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V13H20V7.23792ZM19.501 5H4.51146L12.0619 11.662L19.501 5ZM17.05 19.5485C17.0172 19.3706 17 19.1873 17 19C17 18.8127 17.0172 18.6294 17.05 18.4515L16.0359 17.866L17.0359 16.134L18.0505 16.7197C18.3278 16.4824 18.6489 16.2948 19 16.1707V15H21V16.1707C21.3511 16.2948 21.6722 16.4824 21.9495 16.7197L22.9641 16.134L23.9641 17.866L22.95 18.4515C22.9828 18.6294 23 18.8127 23 19C23 19.1873 22.9828 19.3706 22.95 19.5485L23.9641 20.134L22.9641 21.866L21.9495 21.2803C21.6722 21.5176 21.3511 21.7052 21 21.8293V23H19V21.8293C18.6489 21.7052 18.3278 21.5176 18.0505 21.2803L17.0359 21.866L16.0359 20.134L17.05 19.5485ZM20 20C20.5523 20 21 19.5523 21 19C21 18.4477 20.5523 18 20 18C19.4477 18 19 18.4477 19 19C19 19.5523 19.4477 20 20 20Z\"></path></svg>
    </div>
    ";
            // line 1398
            yield (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 1398, $this->source); })());
            yield "

    ";
        } elseif (CoreExtension::inFilter("unsubscribe",         // line 1400
(isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 1400, $this->source); })()))) {
            // line 1401
            yield "    <!-- Resubscribed screen, containing link to unsubscribe again -->
    <div class=\"row text-center as-center mb-md\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"64\" height=\"64\" fill=\"currentColor\"><path d=\"M20 7.23792L12.0718 14.338L4 7.21594V19H11.0709C11.1719 19.7061 11.3783 20.3783 11.6736 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V12.2547C21.396 11.8334 20.7224 11.5049 20 11.2899V7.23792ZM19.501 5H4.51146L12.0619 11.662L19.501 5ZM16.7066 20.7076C17.0982 20.895 17.5369 21 18 21C19.6569 21 21 19.6569 21 18C21 17.5369 20.895 17.0982 20.7076 16.7066L16.7066 20.7076ZM15.2924 19.2934L19.2934 15.2924C18.9018 15.105 18.4631 15 18 15C16.3431 15 15 16.3431 15 18C15 18.4631 15.105 18.9018 15.2924 19.2934ZM18 23C15.2386 23 13 20.7614 13 18C13 15.2386 15.2386 13 18 13C20.7614 13 23 15.2386 23 18C23 20.7614 20.7614 23 18 23Z\"></path></svg>
    </div>
    <div class=\"row as-center jc-center\">
        <div class=\"col-md-5 col-xs-12 text-center\">
            <span class=\"fs-16\">";
            // line 1407
            yield (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 1407, $this->source); })());
            yield "</span>
        </div>
    </div>

    ";
        } else {
            // line 1412
            yield "    <!-- Successfully unsubscribed screen -->
    <div class=\"row text-center as-center mb-md\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"64\" height=\"64\" fill=\"currentColor\"><path d=\"M20 7.23792L12.0718 14.338L4 7.21594V19H11.0709C11.1719 19.7061 11.3783 20.3783 11.6736 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V12.2547C21.396 11.8334 20.7224 11.5049 20 11.2899V7.23792ZM19.501 5H4.51146L12.0619 11.662L19.501 5ZM16.7066 20.7076C17.0982 20.895 17.5369 21 18 21C19.6569 21 21 19.6569 21 18C21 17.5369 20.895 17.0982 20.7076 16.7066L16.7066 20.7076ZM15.2924 19.2934L19.2934 15.2924C18.9018 15.105 18.4631 15 18 15C16.3431 15 15 16.3431 15 18C15 18.4631 15.105 18.9018 15.2924 19.2934ZM18 23C15.2386 23 13 20.7614 13 18C13 15.2386 15.2386 13 18 13C20.7614 13 23 15.2386 23 18C23 20.7614 20.7614 23 18 23Z\"></path></svg>
    </div>
    <div class=\"row as-center jc-center\">
        <div class=\"col-md-5 col-xs-12 text-center\">
            <span class=\"fs-16\">";
            // line 1418
            yield (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 1418, $this->source); })());
            yield "</span>
        </div>
    </div>
    ";
        }
        // line 1422
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/@defaults/html/message.html.twig";
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
        return array (  1505 => 1422,  1498 => 1418,  1490 => 1412,  1482 => 1407,  1474 => 1401,  1472 => 1400,  1467 => 1398,  1461 => 1394,  1459 => 1393,  69 => 5,  62 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/@defaults/html/message.html.twig", "/app/docroot/themes/@defaults/html/message.html.twig");
    }
}