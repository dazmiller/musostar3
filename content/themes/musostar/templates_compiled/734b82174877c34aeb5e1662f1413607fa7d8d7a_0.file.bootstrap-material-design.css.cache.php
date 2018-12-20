<?php
/* Smarty version 3.1.32, created on 2018-12-19 03:09:22
  from 'C:\xampp\htdocs\musostar3\content\themes\musostar\css\bootstrap-material-design.css' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c19b662c86bb3_15153402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '734b82174877c34aeb5e1662f1413607fa7d8d7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\musostar3\\content\\themes\\musostar\\css\\bootstrap-material-design.css',
      1 => 1516718257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c19b662c86bb3_15153402 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5434218175c19b662b395e7_80955330';
?>
.card {
  font-size: .875rem;
  font-weight: normal; }

/*!
 * Bootstrap v4.0.0 (https://getbootstrap.com)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
  --blue: #2196f3;
  --indigo: #3f51b5;
  --purple: #9c27b0;
  --pink: #e91e63;
  --red: #f44336;
  --orange: #ff9800;
  --yellow: #ffeb3b;
  --green: #4caf50;
  --teal: #009688;
  --cyan: #00bcd4;
  --white: #fff;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: #009688;
  --secondary: #6c757d;
  --success: #4caf50;
  --info: #03a9f4;
  --warning: #ff5722;
  --danger: #f44336;
  --light: #f5f5f5;
  --dark: #424242;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: "Roboto", "Helvetica", "Arial", sans-serif;
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

*,
*::before,
*::after {
  box-sizing: border-box; }

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: transparent; }

@-ms-viewport {
  width: device-width; }

article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block; }

body {
  margin: 0;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fafafa; }

[tabindex="-1"]:focus {
  outline: 0 !important; }

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible; }

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem; }

p {
  margin-top: 0;
  margin-bottom: 1rem; }

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0; }

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit; }

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem; }

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0; }

dt {
  font-weight: 700; }

dd {
  margin-bottom: .5rem;
  margin-left: 0; }

blockquote {
  margin: 0 0 1rem; }

dfn {
  font-style: italic; }

b,
strong {
  font-weight: bolder; }

small {
  font-size: 80%; }

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline; }

sub {
  bottom: -.25em; }

sup {
  top: -.5em; }

a {
  color: #009688;
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects; }
  a:hover {
    color: #004a43;
    text-decoration: underline; }

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none; }
  a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
    color: inherit;
    text-decoration: none; }
  a:not([href]):not([tabindex]):focus {
    outline: 0; }

pre,
code,
kbd,
samp {
  font-family: monospace, monospace;
  font-size: 1em; }

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar; }

figure {
  margin: 0 0 1rem; }

img {
  vertical-align: middle;
  border-style: none; }

svg:not(:root) {
  overflow: hidden; }

table {
  border-collapse: collapse; }

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom; }

th {
  text-align: inherit; }

label {
  display: inline-block;
  margin-bottom: .5rem; }

button {
  border-radius: 0; }

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color; }

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

button,
input {
  overflow: visible; }

button,
select {
  text-transform: none; }

button,
html [type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button; }

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none; }

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0; }

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox; }

textarea {
  overflow: auto;
  resize: vertical; }

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0; }

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal; }

progress {
  vertical-align: baseline; }

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto; }

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none; }

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button; }

output {
  display: inline-block; }

summary {
  display: list-item;
  cursor: pointer; }

template {
  display: none; }

[hidden] {
  display: none !important; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-family: inherit;
  font-weight: 400;
  line-height: 1.2;
  color: inherit; }

h1, .h1 {
  font-size: 2.5rem; }

h2, .h2 {
  font-size: 2rem; }

h3, .h3 {
  font-size: 1.75rem; }

h4, .h4 {
  font-size: 1.5rem; }

h5, .h5 {
  font-size: 1.25rem; }

h6, .h6 {
  font-size: 1rem; }

.lead {
  font-size: 1.25rem;
  font-weight: 300; }

.display-1 {
  font-size: 7rem;
  font-weight: 300;
  line-height: 1.2; }

.display-2 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2; }

.display-3 {
  font-size: 2.8125rem;
  font-weight: 300;
  line-height: 1.2; }

.display-4 {
  font-size: 2.125rem;
  font-weight: 300;
  line-height: 1.2; }

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1); }

small,
.small {
  font-size: 80%;
  font-weight: 400; }

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3; }

.list-unstyled {
  padding-left: 0;
  list-style: none; }

.list-inline {
  padding-left: 0;
  list-style: none; }

.list-inline-item {
  display: inline-block; }
  .list-inline-item:not(:last-child) {
    margin-right: 0.5rem; }

.initialism {
  font-size: 90%;
  text-transform: uppercase; }

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem; }

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6c757d; }
  .blockquote-footer::before {
    content: "\2014 \00A0"; }

.img-fluid {
  max-width: 100%;
  height: auto; }

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fafafa;
  border: 1px solid #dee2e6;
  border-radius: 0.125rem;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
  max-width: 100%;
  height: auto; }

.figure {
  display: inline-block; }

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1; }

.figure-caption {
  font-size: 90%;
  color: #6c757d; }

code,
kbd,
pre,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

code {
  font-size: 87.5%;
  color: #e91e63;
  word-break: break-word; }
  a > code {
    color: inherit; }

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #fff;
  background-color: #212529;
  border-radius: 0.0625rem;
  box-shadow: inset 0 -0.1rem 0 rgba(0, 0, 0, 0.25); }
  kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700;
    box-shadow: none; }

pre {
  display: block;
  font-size: 87.5%;
  color: #212529; }
  pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal; }

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll; }

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }
  @media (min-width: 576px) {
    .container {
      max-width: 540px; } }
  @media (min-width: 768px) {
    .container {
      max-width: 720px; } }
  @media (min-width: 992px) {
    .container {
      max-width: 960px; } }
  @media (min-width: 1200px) {
    .container {
      max-width: 1140px; } }

.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }

.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px; }

.no-gutters {
  margin-right: 0;
  margin-left: 0; }
  .no-gutters > .col,
  .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0; }

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px; }

.col {
  flex-basis: 0;
  flex-grow: 1;
  max-width: 100%; }

.col-auto {
  flex: 0 0 auto;
  width: auto;
  max-width: none; }

.col-1 {
  flex: 0 0 8.33333%;
  max-width: 8.33333%; }

.col-2 {
  flex: 0 0 16.66667%;
  max-width: 16.66667%; }

.col-3 {
  flex: 0 0 25%;
  max-width: 25%; }

.col-4 {
  flex: 0 0 33.33333%;
  max-width: 33.33333%; }

.col-5 {
  flex: 0 0 41.66667%;
  max-width: 41.66667%; }

.col-6 {
  flex: 0 0 50%;
  max-width: 50%; }

.col-7 {
  flex: 0 0 58.33333%;
  max-width: 58.33333%; }

.col-8 {
  flex: 0 0 66.66667%;
  max-width: 66.66667%; }

.col-9 {
  flex: 0 0 75%;
  max-width: 75%; }

.col-10 {
  flex: 0 0 83.33333%;
  max-width: 83.33333%; }

.col-11 {
  flex: 0 0 91.66667%;
  max-width: 91.66667%; }

.col-12 {
  flex: 0 0 100%;
  max-width: 100%; }

.order-first {
  order: -1; }

.order-last {
  order: 13; }

.order-0 {
  order: 0; }

.order-1 {
  order: 1; }

.order-2 {
  order: 2; }

.order-3 {
  order: 3; }

.order-4 {
  order: 4; }

.order-5 {
  order: 5; }

.order-6 {
  order: 6; }

.order-7 {
  order: 7; }

.order-8 {
  order: 8; }

.order-9 {
  order: 9; }

.order-10 {
  order: 10; }

.order-11 {
  order: 11; }

.order-12 {
  order: 12; }

.offset-1 {
  margin-left: 8.33333%; }

.offset-2 {
  margin-left: 16.66667%; }

.offset-3 {
  margin-left: 25%; }

.offset-4 {
  margin-left: 33.33333%; }

.offset-5 {
  margin-left: 41.66667%; }

.offset-6 {
  margin-left: 50%; }

.offset-7 {
  margin-left: 58.33333%; }

.offset-8 {
  margin-left: 66.66667%; }

.offset-9 {
  margin-left: 75%; }

.offset-10 {
  margin-left: 83.33333%; }

.offset-11 {
  margin-left: 91.66667%; }

@media (min-width: 576px) {
  .col-sm {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-sm-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-sm-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-sm-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-sm-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-sm-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-sm-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-sm-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-sm-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-sm-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-sm-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-sm-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-sm-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-sm-first {
    order: -1; }
  .order-sm-last {
    order: 13; }
  .order-sm-0 {
    order: 0; }
  .order-sm-1 {
    order: 1; }
  .order-sm-2 {
    order: 2; }
  .order-sm-3 {
    order: 3; }
  .order-sm-4 {
    order: 4; }
  .order-sm-5 {
    order: 5; }
  .order-sm-6 {
    order: 6; }
  .order-sm-7 {
    order: 7; }
  .order-sm-8 {
    order: 8; }
  .order-sm-9 {
    order: 9; }
  .order-sm-10 {
    order: 10; }
  .order-sm-11 {
    order: 11; }
  .order-sm-12 {
    order: 12; }
  .offset-sm-0 {
    margin-left: 0; }
  .offset-sm-1 {
    margin-left: 8.33333%; }
  .offset-sm-2 {
    margin-left: 16.66667%; }
  .offset-sm-3 {
    margin-left: 25%; }
  .offset-sm-4 {
    margin-left: 33.33333%; }
  .offset-sm-5 {
    margin-left: 41.66667%; }
  .offset-sm-6 {
    margin-left: 50%; }
  .offset-sm-7 {
    margin-left: 58.33333%; }
  .offset-sm-8 {
    margin-left: 66.66667%; }
  .offset-sm-9 {
    margin-left: 75%; }
  .offset-sm-10 {
    margin-left: 83.33333%; }
  .offset-sm-11 {
    margin-left: 91.66667%; } }

@media (min-width: 768px) {
  .col-md {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-md-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-md-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-md-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-md-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-md-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-md-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-md-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-md-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-md-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-md-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-md-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-md-first {
    order: -1; }
  .order-md-last {
    order: 13; }
  .order-md-0 {
    order: 0; }
  .order-md-1 {
    order: 1; }
  .order-md-2 {
    order: 2; }
  .order-md-3 {
    order: 3; }
  .order-md-4 {
    order: 4; }
  .order-md-5 {
    order: 5; }
  .order-md-6 {
    order: 6; }
  .order-md-7 {
    order: 7; }
  .order-md-8 {
    order: 8; }
  .order-md-9 {
    order: 9; }
  .order-md-10 {
    order: 10; }
  .order-md-11 {
    order: 11; }
  .order-md-12 {
    order: 12; }
  .offset-md-0 {
    margin-left: 0; }
  .offset-md-1 {
    margin-left: 8.33333%; }
  .offset-md-2 {
    margin-left: 16.66667%; }
  .offset-md-3 {
    margin-left: 25%; }
  .offset-md-4 {
    margin-left: 33.33333%; }
  .offset-md-5 {
    margin-left: 41.66667%; }
  .offset-md-6 {
    margin-left: 50%; }
  .offset-md-7 {
    margin-left: 58.33333%; }
  .offset-md-8 {
    margin-left: 66.66667%; }
  .offset-md-9 {
    margin-left: 75%; }
  .offset-md-10 {
    margin-left: 83.33333%; }
  .offset-md-11 {
    margin-left: 91.66667%; } }

@media (min-width: 992px) {
  .col-lg {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-lg-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-lg-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-lg-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-lg-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-lg-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-lg-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-lg-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-lg-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-lg-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-lg-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-lg-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-lg-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-lg-first {
    order: -1; }
  .order-lg-last {
    order: 13; }
  .order-lg-0 {
    order: 0; }
  .order-lg-1 {
    order: 1; }
  .order-lg-2 {
    order: 2; }
  .order-lg-3 {
    order: 3; }
  .order-lg-4 {
    order: 4; }
  .order-lg-5 {
    order: 5; }
  .order-lg-6 {
    order: 6; }
  .order-lg-7 {
    order: 7; }
  .order-lg-8 {
    order: 8; }
  .order-lg-9 {
    order: 9; }
  .order-lg-10 {
    order: 10; }
  .order-lg-11 {
    order: 11; }
  .order-lg-12 {
    order: 12; }
  .offset-lg-0 {
    margin-left: 0; }
  .offset-lg-1 {
    margin-left: 8.33333%; }
  .offset-lg-2 {
    margin-left: 16.66667%; }
  .offset-lg-3 {
    margin-left: 25%; }
  .offset-lg-4 {
    margin-left: 33.33333%; }
  .offset-lg-5 {
    margin-left: 41.66667%; }
  .offset-lg-6 {
    margin-left: 50%; }
  .offset-lg-7 {
    margin-left: 58.33333%; }
  .offset-lg-8 {
    margin-left: 66.66667%; }
  .offset-lg-9 {
    margin-left: 75%; }
  .offset-lg-10 {
    margin-left: 83.33333%; }
  .offset-lg-11 {
    margin-left: 91.66667%; } }

@media (min-width: 1200px) {
  .col-xl {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-xl-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-xl-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-xl-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-xl-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-xl-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-xl-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-xl-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-xl-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-xl-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-xl-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-xl-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-xl-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-xl-first {
    order: -1; }
  .order-xl-last {
    order: 13; }
  .order-xl-0 {
    order: 0; }
  .order-xl-1 {
    order: 1; }
  .order-xl-2 {
    order: 2; }
  .order-xl-3 {
    order: 3; }
  .order-xl-4 {
    order: 4; }
  .order-xl-5 {
    order: 5; }
  .order-xl-6 {
    order: 6; }
  .order-xl-7 {
    order: 7; }
  .order-xl-8 {
    order: 8; }
  .order-xl-9 {
    order: 9; }
  .order-xl-10 {
    order: 10; }
  .order-xl-11 {
    order: 11; }
  .order-xl-12 {
    order: 12; }
  .offset-xl-0 {
    margin-left: 0; }
  .offset-xl-1 {
    margin-left: 8.33333%; }
  .offset-xl-2 {
    margin-left: 16.66667%; }
  .offset-xl-3 {
    margin-left: 25%; }
  .offset-xl-4 {
    margin-left: 33.33333%; }
  .offset-xl-5 {
    margin-left: 41.66667%; }
  .offset-xl-6 {
    margin-left: 50%; }
  .offset-xl-7 {
    margin-left: 58.33333%; }
  .offset-xl-8 {
    margin-left: 66.66667%; }
  .offset-xl-9 {
    margin-left: 75%; }
  .offset-xl-10 {
    margin-left: 83.33333%; }
  .offset-xl-11 {
    margin-left: 91.66667%; } }

.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
  background-color: transparent; }
  .table th,
  .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid rgba(0, 0, 0, 0.06); }
  .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid rgba(0, 0, 0, 0.06); }
  .table tbody + tbody {
    border-top: 2px solid rgba(0, 0, 0, 0.06); }
  .table .table {
    background-color: #fafafa; }

.table-sm th,
.table-sm td {
  padding: 0.3rem; }

.table-bordered {
  border: 1px solid rgba(0, 0, 0, 0.06); }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid rgba(0, 0, 0, 0.06); }
  .table-bordered thead th,
  .table-bordered thead td {
    border-bottom-width: 2px; }

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05); }

.table-hover tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.075); }

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #b8e2de; }

.table-hover .table-primary:hover {
  background-color: #a6dbd6; }
  .table-hover .table-primary:hover > td,
  .table-hover .table-primary:hover > th {
    background-color: #a6dbd6; }

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #d6d8db; }

.table-hover .table-secondary:hover {
  background-color: #c8cbcf; }
  .table-hover .table-secondary:hover > td,
  .table-hover .table-secondary:hover > th {
    background-color: #c8cbcf; }

.table-success,
.table-success > th,
.table-success > td {
  background-color: #cde9ce; }

.table-hover .table-success:hover {
  background-color: #bbe1bd; }
  .table-hover .table-success:hover > td,
  .table-hover .table-success:hover > th {
    background-color: #bbe1bd; }

.table-info,
.table-info > th,
.table-info > td {
  background-color: #b8e7fc; }

.table-hover .table-info:hover {
  background-color: #a0dffb; }
  .table-hover .table-info:hover > td,
  .table-hover .table-info:hover > th {
    background-color: #a0dffb; }

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #ffd0c1; }

.table-hover .table-warning:hover {
  background-color: #ffbda8; }
  .table-hover .table-warning:hover > td,
  .table-hover .table-warning:hover > th {
    background-color: #ffbda8; }

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #fccac7; }

.table-hover .table-danger:hover {
  background-color: #fbb3af; }
  .table-hover .table-danger:hover > td,
  .table-hover .table-danger:hover > th {
    background-color: #fbb3af; }

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fcfcfc; }

.table-hover .table-light:hover {
  background-color: #efefef; }
  .table-hover .table-light:hover > td,
  .table-hover .table-light:hover > th {
    background-color: #efefef; }

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #cacaca; }

.table-hover .table-dark:hover {
  background-color: #bdbdbd; }
  .table-hover .table-dark:hover > td,
  .table-hover .table-dark:hover > th {
    background-color: #bdbdbd; }

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075); }

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075); }
  .table-hover .table-active:hover > td,
  .table-hover .table-active:hover > th {
    background-color: rgba(0, 0, 0, 0.075); }

.table .thead-dark th {
  color: #fafafa;
  background-color: #212529;
  border-color: #32383e; }

.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: rgba(0, 0, 0, 0.06); }

.table-dark {
  color: #fafafa;
  background-color: #212529; }
  .table-dark th,
  .table-dark td,
  .table-dark thead th {
    border-color: #32383e; }
  .table-dark.table-bordered {
    border: 0; }
  .table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05); }
  .table-dark.table-hover tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.075); }

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-sm > .table-bordered {
      border: 0; } }

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-md > .table-bordered {
      border: 0; } }

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-lg > .table-bordered {
      border: 0; } }

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-xl > .table-bordered {
      border: 0; } }

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar; }
  .table-responsive > .table-bordered {
    border: 0; }

.form-control, .custom-file-control {
  display: block;
  width: 100%;
  padding: 0.4375rem 0;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: transparent;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.26);
  border-radius: 0;
  box-shadow: none;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
  .form-control::-ms-expand, .custom-file-control::-ms-expand {
    background-color: transparent;
    border: 0; }
  .form-control:focus, .custom-file-control:focus {
    color: #495057;
    background-color: transparent;
    border-color: #17ffe9;
    outline: 0;
    box-shadow: none, 0 0 0 0.2rem rgba(0, 150, 136, 0.25); }
  .form-control::placeholder, .custom-file-control::placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control:disabled, .custom-file-control:disabled, .form-control[readonly], [readonly].custom-file-control {
    background-color: #e9ecef;
    opacity: 1; }

select.form-control:not([size]):not([multiple]), select.custom-file-control:not([size]):not([multiple]) {
  height: calc(2.4375rem + 2px); }

select.form-control:focus::-ms-value, select.custom-file-control:focus::-ms-value {
  color: #495057;
  background-color: transparent; }

.form-control-file,
.form-control-range {
  display: block;
  width: 100%; }

.col-form-label {
  padding-top: calc(0.4375rem + 1px);
  padding-bottom: calc(0.4375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5; }

.col-form-label-lg {
  padding-top: calc(0.5625rem + 1px);
  padding-bottom: calc(0.5625rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5; }

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5; }

.form-control-plaintext {
  display: block;
  width: 100%;
  padding-top: 0.4375rem;
  padding-bottom: 0.4375rem;
  margin-bottom: 0;
  line-height: 1.5;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0; }
  .form-control-plaintext.form-control-sm, .input-group-sm > .form-control-plaintext.form-control, .input-group-sm > .form-control-plaintext.custom-file-control,
  .input-group-sm > .input-group-prepend > .form-control-plaintext.input-group-text,
  .input-group-sm > .input-group-append > .form-control-plaintext.input-group-text,
  .input-group-sm > .input-group-prepend > .form-control-plaintext.btn,
  .input-group-sm > .input-group-prepend > .form-control-plaintext.custom-file-control::before,
  .input-group-sm > .input-group-append > .form-control-plaintext.btn,
  .input-group-sm > .input-group-append > .form-control-plaintext.custom-file-control::before, .form-control-plaintext.form-control-lg, .input-group-lg > .form-control-plaintext.form-control, .input-group-lg > .form-control-plaintext.custom-file-control,
  .input-group-lg > .input-group-prepend > .form-control-plaintext.input-group-text,
  .input-group-lg > .input-group-append > .form-control-plaintext.input-group-text,
  .input-group-lg > .input-group-prepend > .form-control-plaintext.btn,
  .input-group-lg > .input-group-prepend > .form-control-plaintext.custom-file-control::before,
  .input-group-lg > .input-group-append > .form-control-plaintext.btn,
  .input-group-lg > .input-group-append > .form-control-plaintext.custom-file-control::before {
    padding-right: 0;
    padding-left: 0; }

.form-control-sm, .input-group-sm > .form-control, .input-group-sm > .custom-file-control,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-prepend > .custom-file-control::before,
.input-group-sm > .input-group-append > .btn,
.input-group-sm > .input-group-append > .custom-file-control::before {
  padding: 0.25rem 0;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.0625rem; }

select.form-control-sm:not([size]):not([multiple]), .input-group-sm > select.form-control:not([size]):not([multiple]), .input-group-sm > select.custom-file-control:not([size]):not([multiple]),
.input-group-sm > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
.input-group-sm > .input-group-append > select.input-group-text:not([size]):not([multiple]),
.input-group-sm > .input-group-prepend > select.btn:not([size]):not([multiple]),
.input-group-sm > .input-group-prepend > select.custom-file-control:not([size]):not([multiple])::before,
.input-group-sm > .input-group-append > select.btn:not([size]):not([multiple]),
.input-group-sm > .input-group-append > select.custom-file-control:not([size]):not([multiple])::before {
  height: calc(2.125rem + 2px); }

.form-control-lg, .input-group-lg > .form-control, .input-group-lg > .custom-file-control,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-prepend > .custom-file-control::before,
.input-group-lg > .input-group-append > .btn,
.input-group-lg > .input-group-append > .custom-file-control::before {
  padding: 0.5625rem 0;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

select.form-control-lg:not([size]):not([multiple]), .input-group-lg > select.form-control:not([size]):not([multiple]), .input-group-lg > select.custom-file-control:not([size]):not([multiple]),
.input-group-lg > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
.input-group-lg > .input-group-append > select.input-group-text:not([size]):not([multiple]),
.input-group-lg > .input-group-prepend > select.btn:not([size]):not([multiple]),
.input-group-lg > .input-group-prepend > select.custom-file-control:not([size]):not([multiple])::before,
.input-group-lg > .input-group-append > select.btn:not([size]):not([multiple]),
.input-group-lg > .input-group-append > select.custom-file-control:not([size]):not([multiple])::before {
  height: calc(2.875rem + 2px); }

.form-group {
  margin-bottom: 1rem; }

.form-text {
  display: block;
  margin-top: 0.25rem; }

.form-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px; }
  .form-row > .col,
  .form-row > [class*="col-"] {
    padding-right: 5px;
    padding-left: 5px; }

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem; }

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem; }
  .form-check-input:disabled ~ .form-check-label {
    color: #6c757d; }

.form-check-label {
  margin-bottom: 0; }

.form-check-inline {
  display: inline-flex;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem; }
  .form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0; }

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #4caf50; }

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(76, 175, 80, 0.8);
  border-radius: .2rem; }

.was-validated .form-control:valid, .was-validated .custom-file-control:valid, .form-control.is-valid, .is-valid.custom-file-control, .was-validated
.custom-select:valid,
.custom-select.is-valid {
  border-color: #4caf50; }
  .was-validated .form-control:valid:focus, .was-validated .custom-file-control:valid:focus, .form-control.is-valid:focus, .is-valid.custom-file-control:focus, .was-validated
  .custom-select:valid:focus,
  .custom-select.is-valid:focus {
    border-color: #4caf50;
    box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25); }
  .was-validated .form-control:valid ~ .valid-feedback, .was-validated .custom-file-control:valid ~ .valid-feedback,
  .was-validated .form-control:valid ~ .valid-tooltip,
  .was-validated .custom-file-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback, .is-valid.custom-file-control ~ .valid-feedback,
  .form-control.is-valid ~ .valid-tooltip, .is-valid.custom-file-control ~ .valid-tooltip, .was-validated
  .custom-select:valid ~ .valid-feedback,
  .was-validated
  .custom-select:valid ~ .valid-tooltip,
  .custom-select.is-valid ~ .valid-feedback,
  .custom-select.is-valid ~ .valid-tooltip {
    display: block; }

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #4caf50; }

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #4caf50; }
  .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
    background-color: #a3d7a5; }

.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  background-color: #6ec071; }

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(76, 175, 80, 0.25); }

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #4caf50; }
  .was-validated .custom-file-input:valid ~ .custom-file-label::before, .custom-file-input.is-valid ~ .custom-file-label::before {
    border-color: inherit; }

.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25); }

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #f44336; }

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(244, 67, 54, 0.8);
  border-radius: .2rem; }

.was-validated .form-control:invalid, .was-validated .custom-file-control:invalid, .form-control.is-invalid, .is-invalid.custom-file-control, .was-validated
.custom-select:invalid,
.custom-select.is-invalid {
  border-color: #f44336; }
  .was-validated .form-control:invalid:focus, .was-validated .custom-file-control:invalid:focus, .form-control.is-invalid:focus, .is-invalid.custom-file-control:focus, .was-validated
  .custom-select:invalid:focus,
  .custom-select.is-invalid:focus {
    border-color: #f44336;
    box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.25); }
  .was-validated .form-control:invalid ~ .invalid-feedback, .was-validated .custom-file-control:invalid ~ .invalid-feedback,
  .was-validated .form-control:invalid ~ .invalid-tooltip,
  .was-validated .custom-file-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback, .is-invalid.custom-file-control ~ .invalid-feedback,
  .form-control.is-invalid ~ .invalid-tooltip, .is-invalid.custom-file-control ~ .invalid-tooltip, .was-validated
  .custom-select:invalid ~ .invalid-feedback,
  .was-validated
  .custom-select:invalid ~ .invalid-tooltip,
  .custom-select.is-invalid ~ .invalid-feedback,
  .custom-select.is-invalid ~ .invalid-tooltip {
    display: block; }

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #f44336; }

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #f44336; }
  .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
    background-color: #fbb4af; }

.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  background-color: #f77066; }

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(244, 67, 54, 0.25); }

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #f44336; }
  .was-validated .custom-file-input:invalid ~ .custom-file-label::before, .custom-file-input.is-invalid ~ .custom-file-label::before {
    border-color: inherit; }

.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.25); }

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center; }
  .form-inline .form-check {
    width: 100%; }
  @media (min-width: 576px) {
    .form-inline label {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 0; }
    .form-inline .form-group {
      display: flex;
      flex: 0 0 auto;
      flex-flow: row wrap;
      align-items: center;
      margin-bottom: 0; }
    .form-inline .form-control, .form-inline .custom-file-control {
      display: inline-block;
      width: auto;
      vertical-align: middle; }
    .form-inline .form-control-plaintext {
      display: inline-block; }
    .form-inline .input-group {
      width: auto; }
    .form-inline .form-check {
      display: flex;
      align-items: center;
      justify-content: center;
      width: auto;
      padding-left: 0; }
    .form-inline .form-check-input {
      position: relative;
      margin-top: 0;
      margin-right: 0.25rem;
      margin-left: 0; }
    .form-inline .custom-control {
      align-items: center;
      justify-content: center; }
    .form-inline .custom-control-label {
      margin-bottom: 0; } }

.btn, .custom-file-control::before {
  display: inline-block;
  font-weight: 500;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  user-select: none;
  border: 1px solid transparent;
  padding: 0.46875rem 1rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.125rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
  .btn:hover, .custom-file-control:hover::before, .btn:focus, .custom-file-control:focus::before {
    text-decoration: none; }
  .btn:focus, .custom-file-control:focus::before, .btn.focus, .focus.custom-file-control::before {
    outline: 0;
    box-shadow: none; }
  .btn.disabled, .disabled.custom-file-control::before, .btn:disabled, .custom-file-control:disabled::before {
    opacity: 0.65;
    box-shadow: none; }
  .btn:not(:disabled):not(.disabled), .custom-file-control:not(:disabled):not(.disabled)::before {
    cursor: pointer; }
  .btn:not(:disabled):not(.disabled):active, .custom-file-control:not(:disabled):not(.disabled):active::before, .btn:not(:disabled):not(.disabled).active, .custom-file-control:not(:disabled):not(.disabled).active::before {
    background-image: none;
    box-shadow: none; }
    .btn:not(:disabled):not(.disabled):active:focus, .custom-file-control:not(:disabled):not(.disabled):active:focus::before, .btn:not(:disabled):not(.disabled).active:focus, .custom-file-control:not(:disabled):not(.disabled).active:focus::before {
      box-shadow: none, none; }

a.btn.disabled, a.disabled.custom-file-control::before,
fieldset:disabled a.btn,
fieldset:disabled a.custom-file-control::before {
  pointer-events: none; }

.btn-primary {
  color: #fff;
  background-color: #009688;
  border-color: #009688;
  box-shadow: none; }
  .btn-primary:hover {
    color: #fff;
    background-color: #007065;
    border-color: #00635a; }
  .btn-primary:focus, .btn-primary.focus {
    box-shadow: none, 0 0 0 0.2rem rgba(0, 150, 136, 0.5); }
  .btn-primary.disabled, .btn-primary:disabled {
    color: #fff;
    background-color: #009688;
    border-color: #009688; }
  .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #00635a;
    border-color: #00564e; }
    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
      box-shadow: none, 0 0 0 0.2rem rgba(0, 150, 136, 0.5); }

.btn-secondary {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
  box-shadow: none; }
  .btn-secondary:hover {
    color: #fff;
    background-color: #5a6268;
    border-color: #545b62; }
  .btn-secondary:focus, .btn-secondary.focus {
    box-shadow: none, 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }
  .btn-secondary.disabled, .btn-secondary:disabled {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d; }
  .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #545b62;
    border-color: #4e555b; }
    .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
      box-shadow: none, 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }

.btn-success {
  color: #fff;
  background-color: #4caf50;
  border-color: #4caf50;
  box-shadow: none; }
  .btn-success:hover {
    color: #fff;
    background-color: #409444;
    border-color: #3d8b40; }
  .btn-success:focus, .btn-success.focus {
    box-shadow: none, 0 0 0 0.2rem rgba(76, 175, 80, 0.5); }
  .btn-success.disabled, .btn-success:disabled {
    color: #fff;
    background-color: #4caf50;
    border-color: #4caf50; }
  .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
  .show > .btn-success.dropdown-toggle {
    color: #fff;
    background-color: #3d8b40;
    border-color: #39833c; }
    .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
      box-shadow: none, 0 0 0 0.2rem rgba(76, 175, 80, 0.5); }

.btn-info {
  color: #fff;
  background-color: #03a9f4;
  border-color: #03a9f4;
  box-shadow: none; }
  .btn-info:hover {
    color: #fff;
    background-color: #038fce;
    border-color: #0286c2; }
  .btn-info:focus, .btn-info.focus {
    box-shadow: none, 0 0 0 0.2rem rgba(3, 169, 244, 0.5); }
  .btn-info.disabled, .btn-info:disabled {
    color: #fff;
    background-color: #03a9f4;
    border-color: #03a9f4; }
  .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
  .show > .btn-info.dropdown-toggle {
    color: #fff;
    background-color: #0286c2;
    border-color: #027db5; }
    .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-info.dropdown-toggle:focus {
      box-shadow: none, 0 0 0 0.2rem rgba(3, 169, 244, 0.5); }

.btn-warning {
  color: #fff;
  background-color: #ff5722;
  border-color: #ff5722;
  box-shadow: none; }
  .btn-warning:hover {
    color: #fff;
    background-color: #fb3c00;
    border-color: #ee3900; }
  .btn-warning:focus, .btn-warning.focus {
    box-shadow: none, 0 0 0 0.2rem rgba(255, 87, 34, 0.5); }
  .btn-warning.disabled, .btn-warning:disabled {
    color: #fff;
    background-color: #ff5722;
    border-color: #ff5722; }
  .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
  .show > .btn-warning.dropdown-toggle {
    color: #fff;
    background-color: #ee3900;
    border-color: #e13600; }
    .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
      box-shadow: none, 0 0 0 0.2rem rgba(255, 87, 34, 0.5); }

.btn-danger {
  color: #fff;
  background-color: #f44336;
  border-color: #f44336;
  box-shadow: none; }
  .btn-danger:hover {
    color: #fff;
    background-color: #f22112;
    border-color: #ea1c0d; }
  .btn-danger:focus, .btn-danger.focus {
    box-shadow: none, 0 0 0 0.2rem rgba(244, 67, 54, 0.5); }
  .btn-danger.disabled, .btn-danger:disabled {
    color: #fff;
    background-color: #f44336;
    border-color: #f44336; }
  .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
  .show > .btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #ea1c0d;
    border-color: #de1b0c; }
    .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
      box-shadow: none, 0 0 0 0.2rem rgba(244, 67, 54, 0.5); }

.btn-light {
  color: #212529;
  background-color: #f5f5f5;
  border-color: #f5f5f5;
  box-shadow: none; }
  .btn-light:hover {
    color: #212529;
    background-color: #e2e2e2;
    border-color: gainsboro; }
  .btn-light:focus, .btn-light.focus {
    box-shadow: none, 0 0 0 0.2rem rgba(245, 245, 245, 0.5); }
  .btn-light.disabled, .btn-light:disabled {
    color: #212529;
    background-color: #f5f5f5;
    border-color: #f5f5f5; }
  .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
  .show > .btn-light.dropdown-toggle {
    color: #212529;
    background-color: gainsboro;
    border-color: #d5d5d5; }
    .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
      box-shadow: none, 0 0 0 0.2rem rgba(245, 245, 245, 0.5); }

.btn-dark {
  color: #fff;
  background-color: #424242;
  border-color: #424242;
  box-shadow: none; }
  .btn-dark:hover {
    color: #fff;
    background-color: #2f2f2f;
    border-color: #292929; }
  .btn-dark:focus, .btn-dark.focus {
    box-shadow: none, 0 0 0 0.2rem rgba(66, 66, 66, 0.5); }
  .btn-dark.disabled, .btn-dark:disabled {
    color: #fff;
    background-color: #424242;
    border-color: #424242; }
  .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
  .show > .btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #292929;
    border-color: #222222; }
    .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
      box-shadow: none, 0 0 0 0.2rem rgba(66, 66, 66, 0.5); }

.btn-outline-primary {
  color: #009688;
  background-color: transparent;
  background-image: none;
  border-color: #009688; }
  .btn-outline-primary:hover {
    color: #fff;
    background-color: #009688;
    border-color: #009688; }
  .btn-outline-primary:focus, .btn-outline-primary.focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 150, 136, 0.5); }
  .btn-outline-primary.disabled, .btn-outline-primary:disabled {
    color: #009688;
    background-color: transparent; }
  .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #009688;
    border-color: #009688; }
    .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-primary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 150, 136, 0.5); }

.btn-outline-secondary {
  color: #6c757d;
  background-color: transparent;
  background-image: none;
  border-color: #6c757d; }
  .btn-outline-secondary:hover {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d; }
  .btn-outline-secondary:focus, .btn-outline-secondary.focus {
    box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }
  .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
    color: #6c757d;
    background-color: transparent; }
  .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d; }
    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-secondary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }

.btn-outline-success {
  color: #4caf50;
  background-color: transparent;
  background-image: none;
  border-color: #4caf50; }
  .btn-outline-success:hover {
    color: #fff;
    background-color: #4caf50;
    border-color: #4caf50; }
  .btn-outline-success:focus, .btn-outline-success.focus {
    box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.5); }
  .btn-outline-success.disabled, .btn-outline-success:disabled {
    color: #4caf50;
    background-color: transparent; }
  .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
  .show > .btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #4caf50;
    border-color: #4caf50; }
    .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-success.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.5); }

.btn-outline-info {
  color: #03a9f4;
  background-color: transparent;
  background-image: none;
  border-color: #03a9f4; }
  .btn-outline-info:hover {
    color: #fff;
    background-color: #03a9f4;
    border-color: #03a9f4; }
  .btn-outline-info:focus, .btn-outline-info.focus {
    box-shadow: 0 0 0 0.2rem rgba(3, 169, 244, 0.5); }
  .btn-outline-info.disabled, .btn-outline-info:disabled {
    color: #03a9f4;
    background-color: transparent; }
  .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
  .show > .btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #03a9f4;
    border-color: #03a9f4; }
    .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-info.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(3, 169, 244, 0.5); }

.btn-outline-warning {
  color: #ff5722;
  background-color: transparent;
  background-image: none;
  border-color: #ff5722; }
  .btn-outline-warning:hover {
    color: #fff;
    background-color: #ff5722;
    border-color: #ff5722; }
  .btn-outline-warning:focus, .btn-outline-warning.focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 87, 34, 0.5); }
  .btn-outline-warning.disabled, .btn-outline-warning:disabled {
    color: #ff5722;
    background-color: transparent; }
  .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
  .show > .btn-outline-warning.dropdown-toggle {
    color: #fff;
    background-color: #ff5722;
    border-color: #ff5722; }
    .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-warning.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 87, 34, 0.5); }

.btn-outline-danger {
  color: #f44336;
  background-color: transparent;
  background-image: none;
  border-color: #f44336; }
  .btn-outline-danger:hover {
    color: #fff;
    background-color: #f44336;
    border-color: #f44336; }
  .btn-outline-danger:focus, .btn-outline-danger.focus {
    box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.5); }
  .btn-outline-danger.disabled, .btn-outline-danger:disabled {
    color: #f44336;
    background-color: transparent; }
  .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
  .show > .btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #f44336;
    border-color: #f44336; }
    .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-danger.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.5); }

.btn-outline-light {
  color: #f5f5f5;
  background-color: transparent;
  background-image: none;
  border-color: #f5f5f5; }
  .btn-outline-light:hover {
    color: #212529;
    background-color: #f5f5f5;
    border-color: #f5f5f5; }
  .btn-outline-light:focus, .btn-outline-light.focus {
    box-shadow: 0 0 0 0.2rem rgba(245, 245, 245, 0.5); }
  .btn-outline-light.disabled, .btn-outline-light:disabled {
    color: #f5f5f5;
    background-color: transparent; }
  .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
  .show > .btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f5f5f5;
    border-color: #f5f5f5; }
    .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-light.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(245, 245, 245, 0.5); }

.btn-outline-dark {
  color: #424242;
  background-color: transparent;
  background-image: none;
  border-color: #424242; }
  .btn-outline-dark:hover {
    color: #fff;
    background-color: #424242;
    border-color: #424242; }
  .btn-outline-dark:focus, .btn-outline-dark.focus {
    box-shadow: 0 0 0 0.2rem rgba(66, 66, 66, 0.5); }
  .btn-outline-dark.disabled, .btn-outline-dark:disabled {
    color: #424242;
    background-color: transparent; }
  .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
  .show > .btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #424242;
    border-color: #424242; }
    .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-dark.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(66, 66, 66, 0.5); }

.btn-link {
  font-weight: 400;
  color: #009688;
  background-color: transparent; }
  .btn-link:hover {
    color: #004a43;
    text-decoration: underline;
    background-color: transparent;
    border-color: transparent; }
  .btn-link:focus, .btn-link.focus {
    text-decoration: underline;
    border-color: transparent;
    box-shadow: none; }
  .btn-link:disabled, .btn-link.disabled {
    color: rgba(0, 0, 0, 0.26); }

.btn-lg, .btn-group-lg > .btn, .btn-group-lg > .custom-file-control::before {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

.btn-sm, .btn-group-sm > .btn, .btn-group-sm > .custom-file-control::before {
  padding: 0.40625rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.0625rem; }

.btn-block {
  display: block;
  width: 100%; }
  .btn-block + .btn-block {
    margin-top: 0.5rem; }

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%; }

.fade {
  opacity: 0;
  transition: opacity 0.15s linear; }
  .fade.show {
    opacity: 1; }

.collapse {
  display: none; }
  .collapse.show {
    display: block; }

tr.collapse.show {
  display: table-row; }

tbody.collapse.show {
  display: table-row-group; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease; }

.dropup,
.dropdown {
  position: relative; }

.dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent; }

.dropdown-toggle:empty::after {
  margin-left: 0; }

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.125rem;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }

.dropup .dropdown-menu {
  margin-top: 0;
  margin-bottom: 0.125rem; }

.dropup .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent; }

.dropup .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropright .dropdown-menu {
  margin-top: 0;
  margin-left: 0.125rem; }

.dropright .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid; }

.dropright .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropright .dropdown-toggle::after {
  vertical-align: 0; }

.dropleft .dropdown-menu {
  margin-top: 0;
  margin-right: 0.125rem; }

.dropleft .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: ""; }

.dropleft .dropdown-toggle::after {
  display: none; }

.dropleft .dropdown-toggle::before {
  display: inline-block;
  width: 0;
  height: 0;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent; }

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropleft .dropdown-toggle::before {
  vertical-align: 0; }

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef; }

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0; }
  .dropdown-item:hover, .dropdown-item:focus {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa; }
  .dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #009688; }
  .dropdown-item.disabled, .dropdown-item:disabled {
    color: #6c757d;
    background-color: transparent; }

.dropdown-menu.show {
  display: block; }

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #6c757d;
  white-space: nowrap; }

.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle; }
  .btn-group > .btn, .btn-group > .custom-file-control::before,
  .btn-group-vertical > .btn,
  .btn-group-vertical > .custom-file-control::before {
    position: relative;
    flex: 0 1 auto; }
    .btn-group > .btn:hover, .btn-group > .custom-file-control:hover::before,
    .btn-group-vertical > .btn:hover,
    .btn-group-vertical > .custom-file-control:hover::before {
      z-index: 1; }
    .btn-group > .btn:focus, .btn-group > .custom-file-control:focus::before, .btn-group > .btn:active, .btn-group > .custom-file-control:active::before, .btn-group > .btn.active, .btn-group > .active.custom-file-control::before,
    .btn-group-vertical > .btn:focus,
    .btn-group-vertical > .custom-file-control:focus::before,
    .btn-group-vertical > .btn:active,
    .btn-group-vertical > .custom-file-control:active::before,
    .btn-group-vertical > .btn.active,
    .btn-group-vertical > .active.custom-file-control::before {
      z-index: 1; }
  .btn-group .btn + .btn, .btn-group .custom-file-control::before + .btn, .btn-group .btn + .custom-file-control::before, .btn-group .custom-file-control::before + .custom-file-control::before,
  .btn-group .btn + .btn-group,
  .btn-group .custom-file-control::before + .btn-group,
  .btn-group .btn-group + .btn,
  .btn-group .btn-group + .custom-file-control::before,
  .btn-group .btn-group + .btn-group,
  .btn-group-vertical .btn + .btn,
  .btn-group-vertical .custom-file-control::before + .btn,
  .btn-group-vertical .btn + .custom-file-control::before,
  .btn-group-vertical .custom-file-control::before + .custom-file-control::before,
  .btn-group-vertical .btn + .btn-group,
  .btn-group-vertical .custom-file-control::before + .btn-group,
  .btn-group-vertical .btn-group + .btn,
  .btn-group-vertical .btn-group + .custom-file-control::before,
  .btn-group-vertical .btn-group + .btn-group {
    margin-left: -1px; }

.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start; }
  .btn-toolbar .input-group {
    width: auto; }

.btn-group > .btn:first-child, .btn-group > .custom-file-control:first-child::before {
  margin-left: 0; }

.btn-group > .btn:not(:last-child):not(.dropdown-toggle), .btn-group > .custom-file-control:not(:last-child):not(.dropdown-toggle)::before,
.btn-group > .btn-group:not(:last-child) > .btn,
.btn-group > .btn-group:not(:last-child) > .custom-file-control::before {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.btn-group > .btn:not(:first-child), .btn-group > .custom-file-control:not(:first-child)::before,
.btn-group > .btn-group:not(:first-child) > .btn,
.btn-group > .btn-group:not(:first-child) > .custom-file-control::before {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem; }
  .dropdown-toggle-split::after {
    margin-left: 0; }

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split, .btn-group-sm > .custom-file-control::before + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem; }

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split, .btn-group-lg > .custom-file-control::before + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem; }

.btn-group.show .dropdown-toggle {
  box-shadow: none; }
  .btn-group.show .dropdown-toggle.btn-link {
    box-shadow: none; }

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center; }
  .btn-group-vertical .btn, .btn-group-vertical .custom-file-control::before,
  .btn-group-vertical .btn-group {
    width: 100%; }
  .btn-group-vertical > .btn + .btn, .btn-group-vertical > .custom-file-control::before + .btn, .btn-group-vertical > .btn + .custom-file-control::before, .btn-group-vertical > .custom-file-control::before + .custom-file-control::before,
  .btn-group-vertical > .btn + .btn-group,
  .btn-group-vertical > .custom-file-control::before + .btn-group,
  .btn-group-vertical > .btn-group + .btn,
  .btn-group-vertical > .btn-group + .custom-file-control::before,
  .btn-group-vertical > .btn-group + .btn-group {
    margin-top: -1px;
    margin-left: 0; }
  .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle), .btn-group-vertical > .custom-file-control:not(:last-child):not(.dropdown-toggle)::before,
  .btn-group-vertical > .btn-group:not(:last-child) > .btn,
  .btn-group-vertical > .btn-group:not(:last-child) > .custom-file-control::before {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }
  .btn-group-vertical > .btn:not(:first-child), .btn-group-vertical > .custom-file-control:not(:first-child)::before,
  .btn-group-vertical > .btn-group:not(:first-child) > .btn,
  .btn-group-vertical > .btn-group:not(:first-child) > .custom-file-control::before {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.btn-group-toggle > .btn, .btn-group-toggle > .custom-file-control::before,
.btn-group-toggle > .btn-group > .btn,
.btn-group-toggle > .btn-group > .custom-file-control::before {
  margin-bottom: 0; }
  .btn-group-toggle > .btn input[type="radio"], .btn-group-toggle > .custom-file-control::before input[type="radio"],
  .btn-group-toggle > .btn input[type="checkbox"],
  .btn-group-toggle > .custom-file-control::before input[type="checkbox"],
  .btn-group-toggle > .btn-group > .btn input[type="radio"],
  .btn-group-toggle > .btn-group > .custom-file-control::before input[type="radio"],
  .btn-group-toggle > .btn-group > .btn input[type="checkbox"],
  .btn-group-toggle > .btn-group > .custom-file-control::before input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none; }

.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%; }
  .input-group > .form-control, .input-group > .custom-file-control,
  .input-group > .custom-select,
  .input-group > .custom-file {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0; }
    .input-group > .form-control:focus, .input-group > .custom-file-control:focus,
    .input-group > .custom-select:focus,
    .input-group > .custom-file:focus {
      z-index: 3; }
    .input-group > .form-control + .form-control, .input-group > .custom-file-control + .form-control, .input-group > .form-control + .custom-file-control, .input-group > .custom-file-control + .custom-file-control,
    .input-group > .form-control + .custom-select,
    .input-group > .custom-file-control + .custom-select,
    .input-group > .form-control + .custom-file,
    .input-group > .custom-file-control + .custom-file,
    .input-group > .custom-select + .form-control,
    .input-group > .custom-select + .custom-file-control,
    .input-group > .custom-select + .custom-select,
    .input-group > .custom-select + .custom-file,
    .input-group > .custom-file + .form-control,
    .input-group > .custom-file + .custom-file-control,
    .input-group > .custom-file + .custom-select,
    .input-group > .custom-file + .custom-file {
      margin-left: -1px; }
  .input-group > .form-control:not(:last-child), .input-group > .custom-file-control:not(:last-child),
  .input-group > .custom-select:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0; }
  .input-group > .form-control:not(:first-child), .input-group > .custom-file-control:not(:first-child),
  .input-group > .custom-select:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0; }
  .input-group > .custom-file {
    display: flex;
    align-items: center; }
    .input-group > .custom-file:not(:last-child) .custom-file-label,
    .input-group > .custom-file:not(:last-child) .custom-file-label::before {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0; }
    .input-group > .custom-file:not(:first-child) .custom-file-label,
    .input-group > .custom-file:not(:first-child) .custom-file-label::before {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0; }

.input-group-prepend,
.input-group-append {
  display: flex; }
  .input-group-prepend .btn, .input-group-prepend .custom-file-control::before,
  .input-group-append .btn,
  .input-group-append .custom-file-control::before {
    position: relative;
    z-index: 2; }
  .input-group-prepend .btn + .btn, .input-group-prepend .custom-file-control::before + .btn, .input-group-prepend .btn + .custom-file-control::before, .input-group-prepend .custom-file-control::before + .custom-file-control::before,
  .input-group-prepend .btn + .input-group-text,
  .input-group-prepend .custom-file-control::before + .input-group-text,
  .input-group-prepend .input-group-text + .input-group-text,
  .input-group-prepend .input-group-text + .btn,
  .input-group-prepend .input-group-text + .custom-file-control::before,
  .input-group-append .btn + .btn,
  .input-group-append .custom-file-control::before + .btn,
  .input-group-append .btn + .custom-file-control::before,
  .input-group-append .custom-file-control::before + .custom-file-control::before,
  .input-group-append .btn + .input-group-text,
  .input-group-append .custom-file-control::before + .input-group-text,
  .input-group-append .input-group-text + .input-group-text,
  .input-group-append .input-group-text + .btn,
  .input-group-append .input-group-text + .custom-file-control::before {
    margin-left: -1px; }

.input-group-prepend {
  margin-right: -1px; }

.input-group-append {
  margin-left: -1px; }

.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.4375rem 0;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0; }
  .input-group-text input[type="radio"],
  .input-group-text input[type="checkbox"] {
    margin-top: 0; }

.input-group > .input-group-prepend > .btn, .input-group > .input-group-prepend > .custom-file-control::before,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .custom-file-control::before,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .custom-file-control:not(:last-child):not(.dropdown-toggle)::before,
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.input-group > .input-group-append > .btn, .input-group > .input-group-append > .custom-file-control::before,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .custom-file-control::before,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .custom-file-control:not(:first-child)::before,
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem; }

.custom-control-inline {
  display: inline-flex;
  margin-right: 1rem; }

.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0; }
  .custom-control-input:checked ~ .custom-control-label::before {
    color: #fff;
    background-color: #009688;
    box-shadow: none; }
  .custom-control-input:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(0, 150, 136, 0.25); }
  .custom-control-input:active ~ .custom-control-label::before {
    color: #fff;
    background-color: #4affee;
    box-shadow: none; }
  .custom-control-input:disabled ~ .custom-control-label {
    color: #6c757d; }
    .custom-control-input:disabled ~ .custom-control-label::before {
      background-color: #e9ecef; }

.custom-control-label {
  margin-bottom: 0; }
  .custom-control-label::before {
    position: absolute;
    top: 0.25rem;
    left: 0;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    user-select: none;
    background-color: #dee2e6;
    box-shadow: inset 0 0.25rem 0.25rem rgba(0, 0, 0, 0.1); }
  .custom-control-label::after {
    position: absolute;
    top: 0.25rem;
    left: 0;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%; }

.custom-checkbox .custom-control-label::before {
  border-radius: 0.125rem; }

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #009688; }

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E"); }

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  background-color: #009688;
  box-shadow: none; }

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E"); }

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 150, 136, 0.5); }

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(0, 150, 136, 0.5); }

.custom-radio .custom-control-label::before {
  border-radius: 50%; }

.custom-radio .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #009688; }

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E"); }

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 150, 136, 0.5); }

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(2.4375rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
  background-size: 8px 10px;
  border: 1px solid rgba(0, 0, 0, 0.26);
  border-radius: 0.125rem;
  appearance: none; }
  .custom-select:focus {
    border-color: #17ffe9;
    outline: 0;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 5px rgba(23, 255, 233, 0.5); }
    .custom-select:focus::-ms-value {
      color: #495057;
      background-color: transparent; }
  .custom-select[multiple], .custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: 0.75rem;
    background-image: none; }
  .custom-select:disabled {
    color: #6c757d;
    background-color: #e9ecef; }
  .custom-select::-ms-expand {
    opacity: 0; }

.custom-select-sm {
  height: calc(2.125rem + 2px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 75%; }

.custom-select-lg {
  height: calc(2.875rem + 2px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 125%; }

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(2.4375rem + 2px);
  margin-bottom: 0; }

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(2.4375rem + 2px);
  margin: 0;
  opacity: 0; }
  .custom-file-input:focus ~ .custom-file-control {
    border-color: #17ffe9;
    box-shadow: 0 0 0 0.2rem rgba(0, 150, 136, 0.25); }
    .custom-file-input:focus ~ .custom-file-control::before {
      border-color: #17ffe9; }
  .custom-file-input:lang(en) ~ .custom-file-label::after {
    content: "Browse"; }

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(2.4375rem + 2px);
  padding: 0.46875rem 1rem;
  line-height: 1.3;
  color: #495057;
  background-color: transparent;
  border: 0 solid rgba(0, 0, 0, 0.26);
  border-radius: 0;
  box-shadow: none; }
  .custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(calc(2.4375rem + 2px) - 0 * 2);
    padding: 0.46875rem 1rem;
    line-height: 1.3;
    color: #495057;
    content: "Browse";
    background-color: transparent;
    border-left: 0 solid rgba(0, 0, 0, 0.26);
    border-radius: 0 0 0 0; }

.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }

.nav-link {
  display: block;
  padding: 0.5rem 1rem; }
  .nav-link:hover, .nav-link:focus {
    text-decoration: none; }
  .nav-link.disabled {
    color: #6c757d; }

.nav-tabs {
  border-bottom: 1px solid #dee2e6; }
  .nav-tabs .nav-item {
    margin-bottom: -1px; }
  .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0.125rem;
    border-top-right-radius: 0.125rem; }
    .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
      border-color: #e9ecef #e9ecef #dee2e6; }
    .nav-tabs .nav-link.disabled {
      color: #6c757d;
      background-color: transparent;
      border-color: transparent; }
  .nav-tabs .nav-link.active,
  .nav-tabs .nav-item.show .nav-link {
    color: #495057;
    background-color: #fafafa;
    border-color: #dee2e6 #dee2e6 #fafafa; }
  .nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.nav-pills .nav-link {
  border-radius: 0.125rem; }

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #009688; }

.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center; }

.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center; }

.tab-content > .tab-pane {
  display: none; }

.tab-content > .active {
  display: block; }

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 1rem; }
  .navbar > .container,
  .navbar > .container-fluid {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between; }

.navbar-brand {
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap; }
  .navbar-brand:hover, .navbar-brand:focus {
    text-decoration: none; }

.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }
  .navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0; }
  .navbar-nav .dropdown-menu {
    position: static;
    float: none; }

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem; }

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center; }

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.125rem; }
  .navbar-toggler:hover, .navbar-toggler:focus {
    text-decoration: none; }
  .navbar-toggler:not(:disabled):not(.disabled) {
    cursor: pointer; }

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%; }

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-sm .navbar-nav {
      flex-direction: row; }
      .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-sm .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto; }
      .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid {
      flex-wrap: nowrap; }
    .navbar-expand-sm .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-sm .navbar-toggler {
      display: none; }
    .navbar-expand-sm .dropup .dropdown-menu {
      top: auto;
      bottom: 100%; } }

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 768px) {
  .navbar-expand-md {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-md .navbar-nav {
      flex-direction: row; }
      .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-md .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto; }
      .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid {
      flex-wrap: nowrap; }
    .navbar-expand-md .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-md .navbar-toggler {
      display: none; }
    .navbar-expand-md .dropup .dropdown-menu {
      top: auto;
      bottom: 100%; } }

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-lg .navbar-nav {
      flex-direction: row; }
      .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-lg .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto; }
      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid {
      flex-wrap: nowrap; }
    .navbar-expand-lg .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-lg .navbar-toggler {
      display: none; }
    .navbar-expand-lg .dropup .dropdown-menu {
      top: auto;
      bottom: 100%; } }

@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-xl .navbar-nav {
      flex-direction: row; }
      .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-xl .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto; }
      .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid {
      flex-wrap: nowrap; }
    .navbar-expand-xl .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-xl .navbar-toggler {
      display: none; }
    .navbar-expand-xl .dropup .dropdown-menu {
      top: auto;
      bottom: 100%; } }

.navbar-expand {
  flex-flow: row nowrap;
  justify-content: flex-start; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid {
    padding-right: 0;
    padding-left: 0; }
  .navbar-expand .navbar-nav {
    flex-direction: row; }
    .navbar-expand .navbar-nav .dropdown-menu {
      position: absolute; }
    .navbar-expand .navbar-nav .dropdown-menu-right {
      right: 0;
      left: auto; }
    .navbar-expand .navbar-nav .nav-link {
      padding-right: 0.5rem;
      padding-left: 0.5rem; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid {
    flex-wrap: nowrap; }
  .navbar-expand .navbar-collapse {
    display: flex !important;
    flex-basis: auto; }
  .navbar-expand .navbar-toggler {
    display: none; }
  .navbar-expand .dropup .dropdown-menu {
    top: auto;
    bottom: 100%; }

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9); }
  .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5); }
  .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0, 0.7); }
  .navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3); }

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1); }

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5); }
  .navbar-light .navbar-text a {
    color: rgba(0, 0, 0, 0.9); }
    .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
      color: rgba(0, 0, 0, 0.9); }

.navbar-dark .navbar-brand {
  color: #fff; }
  .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
    color: #fff; }

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75); }
  .navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25); }

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff; }

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1); }

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-dark .navbar-text a {
    color: #fff; }
    .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
      color: #fff; }

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.12);
  border-radius: 0.125rem; }
  .card > hr {
    margin-right: 0;
    margin-left: 0; }
  .card > .list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 0.125rem;
    border-top-right-radius: 0.125rem; }
  .card > .list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 0.125rem;
    border-bottom-left-radius: 0.125rem; }

.card-body {
  flex: 1 1 auto;
  padding: 1.25rem; }

.card-title {
  margin-bottom: 0.75rem; }

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0; }

.card-text:last-child {
  margin-bottom: 0; }

.card-link:hover {
  text-decoration: none; }

.card-link + .card-link {
  margin-left: 1.25rem; }

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: #fff;
  border-bottom: 1px solid rgba(0, 0, 0, 0.12); }
  .card-header:first-child {
    border-radius: calc(0.125rem - 1px) calc(0.125rem - 1px) 0 0; }
  .card-header + .list-group .list-group-item:first-child {
    border-top: 0; }

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: #fff;
  border-top: 1px solid rgba(0, 0, 0, 0.12); }
  .card-footer:last-child {
    border-radius: 0 0 calc(0.125rem - 1px) calc(0.125rem - 1px); }

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0; }

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem; }

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem; }

.card-img {
  width: 100%;
  border-radius: calc(0.125rem - 1px); }

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(0.125rem - 1px);
  border-top-right-radius: calc(0.125rem - 1px); }

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(0.125rem - 1px);
  border-bottom-left-radius: calc(0.125rem - 1px); }

.card-deck {
  display: flex;
  flex-direction: column; }
  .card-deck .card {
    margin-bottom: 15px; }
  @media (min-width: 576px) {
    .card-deck {
      flex-flow: row wrap;
      margin-right: -15px;
      margin-left: -15px; }
      .card-deck .card {
        display: flex;
        flex: 1 0 0%;
        flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px; } }

.card-group {
  display: flex;
  flex-direction: column; }
  .card-group > .card {
    margin-bottom: 15px; }
  @media (min-width: 576px) {
    .card-group {
      flex-flow: row wrap; }
      .card-group > .card {
        flex: 1 0 0%;
        margin-bottom: 0; }
        .card-group > .card + .card {
          margin-left: 0;
          border-left: 0; }
        .card-group > .card:first-child {
          border-top-right-radius: 0;
          border-bottom-right-radius: 0; }
          .card-group > .card:first-child .card-img-top,
          .card-group > .card:first-child .card-header {
            border-top-right-radius: 0; }
          .card-group > .card:first-child .card-img-bottom,
          .card-group > .card:first-child .card-footer {
            border-bottom-right-radius: 0; }
        .card-group > .card:last-child {
          border-top-left-radius: 0;
          border-bottom-left-radius: 0; }
          .card-group > .card:last-child .card-img-top,
          .card-group > .card:last-child .card-header {
            border-top-left-radius: 0; }
          .card-group > .card:last-child .card-img-bottom,
          .card-group > .card:last-child .card-footer {
            border-bottom-left-radius: 0; }
        .card-group > .card:only-child {
          border-radius: 0.125rem; }
          .card-group > .card:only-child .card-img-top,
          .card-group > .card:only-child .card-header {
            border-top-left-radius: 0.125rem;
            border-top-right-radius: 0.125rem; }
          .card-group > .card:only-child .card-img-bottom,
          .card-group > .card:only-child .card-footer {
            border-bottom-right-radius: 0.125rem;
            border-bottom-left-radius: 0.125rem; }
        .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
          border-radius: 0; }
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
            border-radius: 0; } }

.card-columns .card {
  margin-bottom: 0.75rem; }

@media (min-width: 576px) {
  .card-columns {
    column-count: 3;
    column-gap: 1.25rem; }
    .card-columns .card {
      display: inline-block;
      width: 100%; } }

.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #e9ecef;
  border-radius: 0.125rem; }

.breadcrumb-item + .breadcrumb-item::before {
  display: inline-block;
  padding-right: 0.5rem;
  padding-left: 0.5rem;
  color: #6c757d;
  content: "/"; }

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline; }

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none; }

.breadcrumb-item.active {
  color: #6c757d; }

.pagination {
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.125rem; }

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: 0;
  line-height: 1.25;
  color: #009688;
  background-color: transparent;
  border: 0 solid #dee2e6; }
  .page-link:hover {
    color: #004a43;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6; }
  .page-link:focus {
    z-index: 2;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 150, 136, 0.25); }
  .page-link:not(:disabled):not(.disabled) {
    cursor: pointer; }

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.125rem;
  border-bottom-left-radius: 0.125rem; }

.page-item:last-child .page-link {
  border-top-right-radius: 0.125rem;
  border-bottom-right-radius: 0.125rem; }

.page-item.active .page-link {
  z-index: 1;
  color: #fff;
  background-color: #009688;
  border-color: #009688; }

.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: transparent;
  border-color: #dee2e6; }

.pagination-lg .page-link {
  padding: 0.75rem 0;
  font-size: 1.25rem;
  line-height: 1.5; }

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem; }

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem; }

.pagination-sm .page-link {
  padding: 0.25rem 0;
  font-size: 0.875rem;
  line-height: 1.5; }

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.0625rem;
  border-bottom-left-radius: 0.0625rem; }

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.0625rem;
  border-bottom-right-radius: 0.0625rem; }

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.125rem; }
  .badge:empty {
    display: none; }

.btn .badge, .custom-file-control::before .badge {
  position: relative;
  top: -1px; }

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem; }

.badge-primary {
  color: #fff;
  background-color: #009688; }
  .badge-primary[href]:hover, .badge-primary[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #00635a; }

.badge-secondary {
  color: #fff;
  background-color: #6c757d; }
  .badge-secondary[href]:hover, .badge-secondary[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #545b62; }

.badge-success {
  color: #fff;
  background-color: #4caf50; }
  .badge-success[href]:hover, .badge-success[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #3d8b40; }

.badge-info {
  color: #fff;
  background-color: #03a9f4; }
  .badge-info[href]:hover, .badge-info[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #0286c2; }

.badge-warning {
  color: #fff;
  background-color: #ff5722; }
  .badge-warning[href]:hover, .badge-warning[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #ee3900; }

.badge-danger {
  color: #fff;
  background-color: #f44336; }
  .badge-danger[href]:hover, .badge-danger[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #ea1c0d; }

.badge-light {
  color: #212529;
  background-color: #f5f5f5; }
  .badge-light[href]:hover, .badge-light[href]:focus {
    color: #212529;
    text-decoration: none;
    background-color: gainsboro; }

.badge-dark {
  color: #fff;
  background-color: #424242; }
  .badge-dark[href]:hover, .badge-dark[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #292929; }

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem; }
  @media (min-width: 576px) {
    .jumbotron {
      padding: 4rem 2rem; } }

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0; }

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.125rem; }

.alert-heading {
  color: inherit; }

.alert-link {
  font-weight: 700; }

.alert-dismissible {
  padding-right: 4rem; }
  .alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit; }

.alert-primary {
  color: #004e47;
  background-color: #cceae7;
  border-color: #b8e2de; }
  .alert-primary hr {
    border-top-color: #a6dbd6; }
  .alert-primary .alert-link {
    color: #001b19; }

.alert-secondary {
  color: #383d41;
  background-color: #e2e3e5;
  border-color: #d6d8db; }
  .alert-secondary hr {
    border-top-color: #c8cbcf; }
  .alert-secondary .alert-link {
    color: #202326; }

.alert-success {
  color: #285b2a;
  background-color: #dbefdc;
  border-color: #cde9ce; }
  .alert-success hr {
    border-top-color: #bbe1bd; }
  .alert-success .alert-link {
    color: #18381a; }

.alert-info {
  color: #02587f;
  background-color: #cdeefd;
  border-color: #b8e7fc; }
  .alert-info hr {
    border-top-color: #a0dffb; }
  .alert-info .alert-link {
    color: #01354d; }

.alert-warning {
  color: #852d12;
  background-color: #ffddd3;
  border-color: #ffd0c1; }
  .alert-warning hr {
    border-top-color: #ffbda8; }
  .alert-warning .alert-link {
    color: #581e0c; }

.alert-danger {
  color: #7f231c;
  background-color: #fdd9d7;
  border-color: #fccac7; }
  .alert-danger hr {
    border-top-color: #fbb3af; }
  .alert-danger .alert-link {
    color: #551713; }

.alert-light {
  color: #7f7f7f;
  background-color: #fdfdfd;
  border-color: #fcfcfc; }
  .alert-light hr {
    border-top-color: #efefef; }
  .alert-light .alert-link {
    color: #666666; }

.alert-dark {
  color: #222222;
  background-color: #d9d9d9;
  border-color: #cacaca; }
  .alert-dark hr {
    border-top-color: #bdbdbd; }
  .alert-dark .alert-link {
    color: #090909; }

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0; }
  to {
    background-position: 0 0; } }

.progress {
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0.125rem;
  box-shadow: inset 0 0.1rem 0.1rem rgba(0, 0, 0, 0.1); }

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: #fff;
  text-align: center;
  background-color: #009688;
  transition: width 0.6s ease; }

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem; }

.progress-bar-animated {
  animation: progress-bar-stripes 1s linear infinite; }

.media {
  display: flex;
  align-items: flex-start; }

.media-body {
  flex: 1; }

.list-group {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0; }

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit; }
  .list-group-item-action:hover, .list-group-item-action:focus {
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa; }
  .list-group-item-action:active {
    color: #212529;
    background-color: #e9ecef; }

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: inherit;
  border: 0 solid rgba(0, 0, 0, 0.125); }
  .list-group-item:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }
  .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }
  .list-group-item:hover, .list-group-item:focus {
    z-index: 1;
    text-decoration: none; }
  .list-group-item.disabled, .list-group-item:disabled {
    color: #6c757d;
    background-color: inherit; }
  .list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #009688;
    border-color: #009688; }

.list-group-flush .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0; }

.list-group-flush:first-child .list-group-item:first-child {
  border-top: 0; }

.list-group-flush:last-child .list-group-item:last-child {
  border-bottom: 0; }

.list-group-item-primary {
  color: #004e47;
  background-color: #b8e2de; }
  .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
    color: #004e47;
    background-color: #a6dbd6; }
  .list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #004e47;
    border-color: #004e47; }

.list-group-item-secondary {
  color: #383d41;
  background-color: #d6d8db; }
  .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
    color: #383d41;
    background-color: #c8cbcf; }
  .list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #383d41;
    border-color: #383d41; }

.list-group-item-success {
  color: #285b2a;
  background-color: #cde9ce; }
  .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
    color: #285b2a;
    background-color: #bbe1bd; }
  .list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #285b2a;
    border-color: #285b2a; }

.list-group-item-info {
  color: #02587f;
  background-color: #b8e7fc; }
  .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
    color: #02587f;
    background-color: #a0dffb; }
  .list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #02587f;
    border-color: #02587f; }

.list-group-item-warning {
  color: #852d12;
  background-color: #ffd0c1; }
  .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
    color: #852d12;
    background-color: #ffbda8; }
  .list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #852d12;
    border-color: #852d12; }

.list-group-item-danger {
  color: #7f231c;
  background-color: #fccac7; }
  .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
    color: #7f231c;
    background-color: #fbb3af; }
  .list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #7f231c;
    border-color: #7f231c; }

.list-group-item-light {
  color: #7f7f7f;
  background-color: #fcfcfc; }
  .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
    color: #7f7f7f;
    background-color: #efefef; }
  .list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #7f7f7f;
    border-color: #7f7f7f; }

.list-group-item-dark {
  color: #222222;
  background-color: #cacaca; }
  .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
    color: #222222;
    background-color: #bdbdbd; }
  .list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #222222;
    border-color: #222222; }

.close {
  float: right;
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .5; }
  .close:hover, .close:focus {
    color: #000;
    text-decoration: none;
    opacity: .75; }
  .close:not(:disabled):not(.disabled) {
    cursor: pointer; }

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none; }

.modal-open {
  overflow: hidden; }

.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  outline: 0; }
  .modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto; }

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none; }
  .modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
    transform: translate(0, -25%); }
  .modal.show .modal-dialog {
    transform: translate(0, 0); }

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - (0.5rem * 2)); }

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.5);
  outline: 0; }

.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000; }
  .modal-backdrop.fade {
    opacity: 0; }
  .modal-backdrop.show {
    opacity: 0.26; }

.modal-header {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding: 1rem;
  border-bottom: 1px solid #e9ecef;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem; }
  .modal-header .close {
    padding: 1rem;
    margin: -1rem -1rem -1rem auto; }

.modal-title {
  margin-bottom: 0;
  line-height: 1.5; }

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: 1rem; }

.modal-footer {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  padding: 1rem;
  border-top: 1px solid #e9ecef; }
  .modal-footer > :not(:first-child) {
    margin-left: .25rem; }
  .modal-footer > :not(:last-child) {
    margin-right: .25rem; }

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll; }

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto; }
  .modal-dialog-centered {
    min-height: calc(100% - (1.75rem * 2)); }
  .modal-content {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.5); }
  .modal-sm {
    max-width: 300px; } }

@media (min-width: 992px) {
  .modal-lg {
    max-width: 800px; } }

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0; }
  .tooltip.show {
    opacity: 0.9; }
  .tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem; }
    .tooltip .arrow::before {
      position: absolute;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0; }
  .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
    bottom: 0; }
    .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
      top: 0;
      border-width: 0.4rem 0.4rem 0;
      border-top-color: rgba(97, 97, 97, 0.9); }

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem; }
  .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
      right: 0;
      border-width: 0.4rem 0.4rem 0.4rem 0;
      border-right-color: rgba(97, 97, 97, 0.9); }

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0; }
  .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
    top: 0; }
    .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
      bottom: 0;
      border-width: 0 0.4rem 0.4rem;
      border-bottom-color: rgba(97, 97, 97, 0.9); }

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem; }
  .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
      left: 0;
      border-width: 0.4rem 0 0.4rem 0.4rem;
      border-left-color: rgba(97, 97, 97, 0.9); }

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: rgba(97, 97, 97, 0.9);
  border-radius: 0.125rem; }

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.2); }
  .popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
    margin: 0 0.3rem; }
    .popover .arrow::before, .popover .arrow::after {
      position: absolute;
      display: block;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem; }
  .bs-popover-top .arrow, .bs-popover-auto[x-placement^="top"] .arrow {
    bottom: calc((0.5rem + 1px) * -1); }
  .bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before,
  .bs-popover-top .arrow::after, .bs-popover-auto[x-placement^="top"] .arrow::after {
    border-width: 0.5rem 0.5rem 0; }
  .bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before {
    bottom: 0;
    border-top-color: rgba(0, 0, 0, 0.25); }
  .bs-popover-top .arrow::after, .bs-popover-auto[x-placement^="top"] .arrow::after {
    bottom: 1px;
    border-top-color: #fff; }

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem; }
  .bs-popover-right .arrow, .bs-popover-auto[x-placement^="right"] .arrow {
    left: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0; }
  .bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before,
  .bs-popover-right .arrow::after, .bs-popover-auto[x-placement^="right"] .arrow::after {
    border-width: 0.5rem 0.5rem 0.5rem 0; }
  .bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before {
    left: 0;
    border-right-color: rgba(0, 0, 0, 0.25); }
  .bs-popover-right .arrow::after, .bs-popover-auto[x-placement^="right"] .arrow::after {
    left: 1px;
    border-right-color: #fff; }

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem; }
  .bs-popover-bottom .arrow, .bs-popover-auto[x-placement^="bottom"] .arrow {
    top: calc((0.5rem + 1px) * -1); }
  .bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before,
  .bs-popover-bottom .arrow::after, .bs-popover-auto[x-placement^="bottom"] .arrow::after {
    border-width: 0 0.5rem 0.5rem 0.5rem; }
  .bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before {
    top: 0;
    border-bottom-color: rgba(0, 0, 0, 0.25); }
  .bs-popover-bottom .arrow::after, .bs-popover-auto[x-placement^="bottom"] .arrow::after {
    top: 1px;
    border-bottom-color: #fff; }
  .bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: "";
    border-bottom: 1px solid #f7f7f7; }

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem; }
  .bs-popover-left .arrow, .bs-popover-auto[x-placement^="left"] .arrow {
    right: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0; }
  .bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before,
  .bs-popover-left .arrow::after, .bs-popover-auto[x-placement^="left"] .arrow::after {
    border-width: 0.5rem 0 0.5rem 0.5rem; }
  .bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before {
    right: 0;
    border-left-color: rgba(0, 0, 0, 0.25); }
  .bs-popover-left .arrow::after, .bs-popover-auto[x-placement^="left"] .arrow::after {
    right: 1px;
    border-left-color: #fff; }

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  color: inherit;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px); }
  .popover-header:empty {
    display: none; }

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #212529; }

.carousel {
  position: relative; }

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden; }

.carousel-item {
  position: relative;
  display: none;
  align-items: center;
  width: 100%;
  transition: transform 0.6s ease;
  backface-visibility: hidden;
  perspective: 1000px; }

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block; }

.carousel-item-next,
.carousel-item-prev {
  position: absolute;
  top: 0; }

.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right {
  transform: translateX(0); }
  @supports (transform-style: preserve-3d) {
    .carousel-item-next.carousel-item-left,
    .carousel-item-prev.carousel-item-right {
      transform: translate3d(0, 0, 0); } }

.carousel-item-next,
.active.carousel-item-right {
  transform: translateX(100%); }
  @supports (transform-style: preserve-3d) {
    .carousel-item-next,
    .active.carousel-item-right {
      transform: translate3d(100%, 0, 0); } }

.carousel-item-prev,
.active.carousel-item-left {
  transform: translateX(-100%); }
  @supports (transform-style: preserve-3d) {
    .carousel-item-prev,
    .active.carousel-item-left {
      transform: translate3d(-100%, 0, 0); } }

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5; }
  .carousel-control-prev:hover, .carousel-control-prev:focus,
  .carousel-control-next:hover,
  .carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: .9; }

.carousel-control-prev {
  left: 0; }

.carousel-control-next {
  right: 0; }

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: transparent no-repeat center center;
  background-size: 100% 100%; }

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E"); }

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E"); }

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 10px;
  left: 0;
  z-index: 15;
  display: flex;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none; }
  .carousel-indicators li {
    position: relative;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    background-color: rgba(255, 255, 255, 0.5); }
    .carousel-indicators li::before {
      position: absolute;
      top: -10px;
      left: 0;
      display: inline-block;
      width: 100%;
      height: 10px;
      content: ""; }
    .carousel-indicators li::after {
      position: absolute;
      bottom: -10px;
      left: 0;
      display: inline-block;
      width: 100%;
      height: 10px;
      content: ""; }
  .carousel-indicators .active {
    background-color: #fff; }

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center; }

.align-baseline {
  vertical-align: baseline !important; }

.align-top {
  vertical-align: top !important; }

.align-middle {
  vertical-align: middle !important; }

.align-bottom {
  vertical-align: bottom !important; }

.align-text-bottom {
  vertical-align: text-bottom !important; }

.align-text-top {
  vertical-align: text-top !important; }

.bg-primary {
  background-color: #009688 !important; }

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #00635a !important; }

.bg-secondary {
  background-color: #6c757d !important; }

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #545b62 !important; }

.bg-success {
  background-color: #4caf50 !important; }

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #3d8b40 !important; }

.bg-info {
  background-color: #03a9f4 !important; }

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #0286c2 !important; }

.bg-warning {
  background-color: #ff5722 !important; }

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #ee3900 !important; }

.bg-danger {
  background-color: #f44336 !important; }

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #ea1c0d !important; }

.bg-light {
  background-color: #f5f5f5 !important; }

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: gainsboro !important; }

.bg-dark {
  background-color: #424242 !important; }

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #292929 !important; }

.bg-white {
  background-color: #fff !important; }

.bg-transparent {
  background-color: transparent !important; }

.border {
  border: 1px solid #dee2e6 !important; }

.border-top {
  border-top: 1px solid #dee2e6 !important; }

.border-right {
  border-right: 1px solid #dee2e6 !important; }

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important; }

.border-left {
  border-left: 1px solid #dee2e6 !important; }

.border-0 {
  border: 0 !important; }

.border-top-0 {
  border-top: 0 !important; }

.border-right-0 {
  border-right: 0 !important; }

.border-bottom-0 {
  border-bottom: 0 !important; }

.border-left-0 {
  border-left: 0 !important; }

.border-primary {
  border-color: #009688 !important; }

.border-secondary {
  border-color: #6c757d !important; }

.border-success {
  border-color: #4caf50 !important; }

.border-info {
  border-color: #03a9f4 !important; }

.border-warning {
  border-color: #ff5722 !important; }

.border-danger {
  border-color: #f44336 !important; }

.border-light {
  border-color: #f5f5f5 !important; }

.border-dark {
  border-color: #424242 !important; }

.border-white {
  border-color: #fff !important; }

.rounded {
  border-radius: 0.125rem !important; }

.rounded-top {
  border-top-left-radius: 0.125rem !important;
  border-top-right-radius: 0.125rem !important; }

.rounded-right {
  border-top-right-radius: 0.125rem !important;
  border-bottom-right-radius: 0.125rem !important; }

.rounded-bottom {
  border-bottom-right-radius: 0.125rem !important;
  border-bottom-left-radius: 0.125rem !important; }

.rounded-left {
  border-top-left-radius: 0.125rem !important;
  border-bottom-left-radius: 0.125rem !important; }

.rounded-circle {
  border-radius: 50% !important; }

.rounded-0 {
  border-radius: 0 !important; }

.clearfix::after {
  display: block;
  clear: both;
  content: ""; }

.d-none {
  display: none !important; }

.d-inline {
  display: inline !important; }

.d-inline-block {
  display: inline-block !important; }

.d-block {
  display: block !important; }

.d-table {
  display: table !important; }

.d-table-row {
  display: table-row !important; }

.d-table-cell {
  display: table-cell !important; }

.d-flex {
  display: flex !important; }

.d-inline-flex {
  display: inline-flex !important; }

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important; }
  .d-sm-inline {
    display: inline !important; }
  .d-sm-inline-block {
    display: inline-block !important; }
  .d-sm-block {
    display: block !important; }
  .d-sm-table {
    display: table !important; }
  .d-sm-table-row {
    display: table-row !important; }
  .d-sm-table-cell {
    display: table-cell !important; }
  .d-sm-flex {
    display: flex !important; }
  .d-sm-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 768px) {
  .d-md-none {
    display: none !important; }
  .d-md-inline {
    display: inline !important; }
  .d-md-inline-block {
    display: inline-block !important; }
  .d-md-block {
    display: block !important; }
  .d-md-table {
    display: table !important; }
  .d-md-table-row {
    display: table-row !important; }
  .d-md-table-cell {
    display: table-cell !important; }
  .d-md-flex {
    display: flex !important; }
  .d-md-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important; }
  .d-lg-inline {
    display: inline !important; }
  .d-lg-inline-block {
    display: inline-block !important; }
  .d-lg-block {
    display: block !important; }
  .d-lg-table {
    display: table !important; }
  .d-lg-table-row {
    display: table-row !important; }
  .d-lg-table-cell {
    display: table-cell !important; }
  .d-lg-flex {
    display: flex !important; }
  .d-lg-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important; }
  .d-xl-inline {
    display: inline !important; }
  .d-xl-inline-block {
    display: inline-block !important; }
  .d-xl-block {
    display: block !important; }
  .d-xl-table {
    display: table !important; }
  .d-xl-table-row {
    display: table-row !important; }
  .d-xl-table-cell {
    display: table-cell !important; }
  .d-xl-flex {
    display: flex !important; }
  .d-xl-inline-flex {
    display: inline-flex !important; } }

@media print {
  .d-print-none {
    display: none !important; }
  .d-print-inline {
    display: inline !important; }
  .d-print-inline-block {
    display: inline-block !important; }
  .d-print-block {
    display: block !important; }
  .d-print-table {
    display: table !important; }
  .d-print-table-row {
    display: table-row !important; }
  .d-print-table-cell {
    display: table-cell !important; }
  .d-print-flex {
    display: flex !important; }
  .d-print-inline-flex {
    display: inline-flex !important; } }

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden; }
  .embed-responsive::before {
    display: block;
    content: ""; }
  .embed-responsive .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object,
  .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0; }

.embed-responsive-21by9::before {
  padding-top: 42.85714%; }

.embed-responsive-16by9::before {
  padding-top: 56.25%; }

.embed-responsive-4by3::before {
  padding-top: 75%; }

.embed-responsive-1by1::before {
  padding-top: 100%; }

.flex-row {
  flex-direction: row !important; }

.flex-column {
  flex-direction: column !important; }

.flex-row-reverse {
  flex-direction: row-reverse !important; }

.flex-column-reverse {
  flex-direction: column-reverse !important; }

.flex-wrap {
  flex-wrap: wrap !important; }

.flex-nowrap {
  flex-wrap: nowrap !important; }

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important; }

.justify-content-start {
  justify-content: flex-start !important; }

.justify-content-end {
  justify-content: flex-end !important; }

.justify-content-center {
  justify-content: center !important; }

.justify-content-between {
  justify-content: space-between !important; }

.justify-content-around {
  justify-content: space-around !important; }

.align-items-start {
  align-items: flex-start !important; }

.align-items-end {
  align-items: flex-end !important; }

.align-items-center {
  align-items: center !important; }

.align-items-baseline {
  align-items: baseline !important; }

.align-items-stretch {
  align-items: stretch !important; }

.align-content-start {
  align-content: flex-start !important; }

.align-content-end {
  align-content: flex-end !important; }

.align-content-center {
  align-content: center !important; }

.align-content-between {
  align-content: space-between !important; }

.align-content-around {
  align-content: space-around !important; }

.align-content-stretch {
  align-content: stretch !important; }

.align-self-auto {
  align-self: auto !important; }

.align-self-start {
  align-self: flex-start !important; }

.align-self-end {
  align-self: flex-end !important; }

.align-self-center {
  align-self: center !important; }

.align-self-baseline {
  align-self: baseline !important; }

.align-self-stretch {
  align-self: stretch !important; }

@media (min-width: 576px) {
  .flex-sm-row {
    flex-direction: row !important; }
  .flex-sm-column {
    flex-direction: column !important; }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-sm-wrap {
    flex-wrap: wrap !important; }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important; }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .justify-content-sm-start {
    justify-content: flex-start !important; }
  .justify-content-sm-end {
    justify-content: flex-end !important; }
  .justify-content-sm-center {
    justify-content: center !important; }
  .justify-content-sm-between {
    justify-content: space-between !important; }
  .justify-content-sm-around {
    justify-content: space-around !important; }
  .align-items-sm-start {
    align-items: flex-start !important; }
  .align-items-sm-end {
    align-items: flex-end !important; }
  .align-items-sm-center {
    align-items: center !important; }
  .align-items-sm-baseline {
    align-items: baseline !important; }
  .align-items-sm-stretch {
    align-items: stretch !important; }
  .align-content-sm-start {
    align-content: flex-start !important; }
  .align-content-sm-end {
    align-content: flex-end !important; }
  .align-content-sm-center {
    align-content: center !important; }
  .align-content-sm-between {
    align-content: space-between !important; }
  .align-content-sm-around {
    align-content: space-around !important; }
  .align-content-sm-stretch {
    align-content: stretch !important; }
  .align-self-sm-auto {
    align-self: auto !important; }
  .align-self-sm-start {
    align-self: flex-start !important; }
  .align-self-sm-end {
    align-self: flex-end !important; }
  .align-self-sm-center {
    align-self: center !important; }
  .align-self-sm-baseline {
    align-self: baseline !important; }
  .align-self-sm-stretch {
    align-self: stretch !important; } }

@media (min-width: 768px) {
  .flex-md-row {
    flex-direction: row !important; }
  .flex-md-column {
    flex-direction: column !important; }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-md-wrap {
    flex-wrap: wrap !important; }
  .flex-md-nowrap {
    flex-wrap: nowrap !important; }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .justify-content-md-start {
    justify-content: flex-start !important; }
  .justify-content-md-end {
    justify-content: flex-end !important; }
  .justify-content-md-center {
    justify-content: center !important; }
  .justify-content-md-between {
    justify-content: space-between !important; }
  .justify-content-md-around {
    justify-content: space-around !important; }
  .align-items-md-start {
    align-items: flex-start !important; }
  .align-items-md-end {
    align-items: flex-end !important; }
  .align-items-md-center {
    align-items: center !important; }
  .align-items-md-baseline {
    align-items: baseline !important; }
  .align-items-md-stretch {
    align-items: stretch !important; }
  .align-content-md-start {
    align-content: flex-start !important; }
  .align-content-md-end {
    align-content: flex-end !important; }
  .align-content-md-center {
    align-content: center !important; }
  .align-content-md-between {
    align-content: space-between !important; }
  .align-content-md-around {
    align-content: space-around !important; }
  .align-content-md-stretch {
    align-content: stretch !important; }
  .align-self-md-auto {
    align-self: auto !important; }
  .align-self-md-start {
    align-self: flex-start !important; }
  .align-self-md-end {
    align-self: flex-end !important; }
  .align-self-md-center {
    align-self: center !important; }
  .align-self-md-baseline {
    align-self: baseline !important; }
  .align-self-md-stretch {
    align-self: stretch !important; } }

@media (min-width: 992px) {
  .flex-lg-row {
    flex-direction: row !important; }
  .flex-lg-column {
    flex-direction: column !important; }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-lg-wrap {
    flex-wrap: wrap !important; }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important; }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .justify-content-lg-start {
    justify-content: flex-start !important; }
  .justify-content-lg-end {
    justify-content: flex-end !important; }
  .justify-content-lg-center {
    justify-content: center !important; }
  .justify-content-lg-between {
    justify-content: space-between !important; }
  .justify-content-lg-around {
    justify-content: space-around !important; }
  .align-items-lg-start {
    align-items: flex-start !important; }
  .align-items-lg-end {
    align-items: flex-end !important; }
  .align-items-lg-center {
    align-items: center !important; }
  .align-items-lg-baseline {
    align-items: baseline !important; }
  .align-items-lg-stretch {
    align-items: stretch !important; }
  .align-content-lg-start {
    align-content: flex-start !important; }
  .align-content-lg-end {
    align-content: flex-end !important; }
  .align-content-lg-center {
    align-content: center !important; }
  .align-content-lg-between {
    align-content: space-between !important; }
  .align-content-lg-around {
    align-content: space-around !important; }
  .align-content-lg-stretch {
    align-content: stretch !important; }
  .align-self-lg-auto {
    align-self: auto !important; }
  .align-self-lg-start {
    align-self: flex-start !important; }
  .align-self-lg-end {
    align-self: flex-end !important; }
  .align-self-lg-center {
    align-self: center !important; }
  .align-self-lg-baseline {
    align-self: baseline !important; }
  .align-self-lg-stretch {
    align-self: stretch !important; } }

@media (min-width: 1200px) {
  .flex-xl-row {
    flex-direction: row !important; }
  .flex-xl-column {
    flex-direction: column !important; }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-xl-wrap {
    flex-wrap: wrap !important; }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important; }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .justify-content-xl-start {
    justify-content: flex-start !important; }
  .justify-content-xl-end {
    justify-content: flex-end !important; }
  .justify-content-xl-center {
    justify-content: center !important; }
  .justify-content-xl-between {
    justify-content: space-between !important; }
  .justify-content-xl-around {
    justify-content: space-around !important; }
  .align-items-xl-start {
    align-items: flex-start !important; }
  .align-items-xl-end {
    align-items: flex-end !important; }
  .align-items-xl-center {
    align-items: center !important; }
  .align-items-xl-baseline {
    align-items: baseline !important; }
  .align-items-xl-stretch {
    align-items: stretch !important; }
  .align-content-xl-start {
    align-content: flex-start !important; }
  .align-content-xl-end {
    align-content: flex-end !important; }
  .align-content-xl-center {
    align-content: center !important; }
  .align-content-xl-between {
    align-content: space-between !important; }
  .align-content-xl-around {
    align-content: space-around !important; }
  .align-content-xl-stretch {
    align-content: stretch !important; }
  .align-self-xl-auto {
    align-self: auto !important; }
  .align-self-xl-start {
    align-self: flex-start !important; }
  .align-self-xl-end {
    align-self: flex-end !important; }
  .align-self-xl-center {
    align-self: center !important; }
  .align-self-xl-baseline {
    align-self: baseline !important; }
  .align-self-xl-stretch {
    align-self: stretch !important; } }

.float-left {
  float: left !important; }

.float-right {
  float: right !important; }

.float-none {
  float: none !important; }

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important; }
  .float-sm-right {
    float: right !important; }
  .float-sm-none {
    float: none !important; } }

@media (min-width: 768px) {
  .float-md-left {
    float: left !important; }
  .float-md-right {
    float: right !important; }
  .float-md-none {
    float: none !important; } }

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important; }
  .float-lg-right {
    float: right !important; }
  .float-lg-none {
    float: none !important; } }

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important; }
  .float-xl-right {
    float: right !important; }
  .float-xl-none {
    float: none !important; } }

.position-static {
  position: static !important; }

.position-relative {
  position: relative !important; }

.position-absolute {
  position: absolute !important; }

.position-fixed {
  position: fixed !important; }

.position-sticky {
  position: sticky !important; }

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030; }

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030; }

@supports (position: sticky) {
  .sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020; } }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  clip-path: inset(50%);
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal;
  clip-path: none; }

.w-25 {
  width: 25% !important; }

.w-50 {
  width: 50% !important; }

.w-75 {
  width: 75% !important; }

.w-100 {
  width: 100% !important; }

.h-25 {
  height: 25% !important; }

.h-50 {
  height: 50% !important; }

.h-75 {
  height: 75% !important; }

.h-100 {
  height: 100% !important; }

.mw-100 {
  max-width: 100% !important; }

.mh-100 {
  max-height: 100% !important; }

.m-0 {
  margin: 0 !important; }

.mt-0,
.my-0 {
  margin-top: 0 !important; }

.mr-0,
.mx-0 {
  margin-right: 0 !important; }

.mb-0,
.my-0 {
  margin-bottom: 0 !important; }

.ml-0,
.mx-0 {
  margin-left: 0 !important; }

.m-1 {
  margin: 0.25rem !important; }

.mt-1,
.my-1 {
  margin-top: 0.25rem !important; }

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important; }

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important; }

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important; }

.m-2 {
  margin: 0.5rem !important; }

.mt-2,
.my-2 {
  margin-top: 0.5rem !important; }

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important; }

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important; }

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important; }

.m-3 {
  margin: 1rem !important; }

.mt-3,
.my-3 {
  margin-top: 1rem !important; }

.mr-3,
.mx-3 {
  margin-right: 1rem !important; }

.mb-3,
.my-3 {
  margin-bottom: 1rem !important; }

.ml-3,
.mx-3 {
  margin-left: 1rem !important; }

.m-4 {
  margin: 1.5rem !important; }

.mt-4,
.my-4 {
  margin-top: 1.5rem !important; }

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important; }

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important; }

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important; }

.m-5 {
  margin: 3rem !important; }

.mt-5,
.my-5 {
  margin-top: 3rem !important; }

.mr-5,
.mx-5 {
  margin-right: 3rem !important; }

.mb-5,
.my-5 {
  margin-bottom: 3rem !important; }

.ml-5,
.mx-5 {
  margin-left: 3rem !important; }

.p-0 {
  padding: 0 !important; }

.pt-0,
.py-0 {
  padding-top: 0 !important; }

.pr-0,
.px-0 {
  padding-right: 0 !important; }

.pb-0,
.py-0 {
  padding-bottom: 0 !important; }

.pl-0,
.px-0 {
  padding-left: 0 !important; }

.p-1 {
  padding: 0.25rem !important; }

.pt-1,
.py-1 {
  padding-top: 0.25rem !important; }

.pr-1,
.px-1 {
  padding-right: 0.25rem !important; }

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important; }

.pl-1,
.px-1 {
  padding-left: 0.25rem !important; }

.p-2 {
  padding: 0.5rem !important; }

.pt-2,
.py-2 {
  padding-top: 0.5rem !important; }

.pr-2,
.px-2 {
  padding-right: 0.5rem !important; }

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important; }

.pl-2,
.px-2 {
  padding-left: 0.5rem !important; }

.p-3 {
  padding: 1rem !important; }

.pt-3,
.py-3 {
  padding-top: 1rem !important; }

.pr-3,
.px-3 {
  padding-right: 1rem !important; }

.pb-3,
.py-3 {
  padding-bottom: 1rem !important; }

.pl-3,
.px-3 {
  padding-left: 1rem !important; }

.p-4 {
  padding: 1.5rem !important; }

.pt-4,
.py-4 {
  padding-top: 1.5rem !important; }

.pr-4,
.px-4 {
  padding-right: 1.5rem !important; }

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important; }

.pl-4,
.px-4 {
  padding-left: 1.5rem !important; }

.p-5 {
  padding: 3rem !important; }

.pt-5,
.py-5 {
  padding-top: 3rem !important; }

.pr-5,
.px-5 {
  padding-right: 3rem !important; }

.pb-5,
.py-5 {
  padding-bottom: 3rem !important; }

.pl-5,
.px-5 {
  padding-left: 3rem !important; }

.m-auto {
  margin: auto !important; }

.mt-auto,
.my-auto {
  margin-top: auto !important; }

.mr-auto,
.mx-auto {
  margin-right: auto !important; }

.mb-auto,
.my-auto {
  margin-bottom: auto !important; }

.ml-auto,
.mx-auto {
  margin-left: auto !important; }

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important; }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important; }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important; }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important; }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important; }
  .m-sm-1 {
    margin: 0.25rem !important; }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important; }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important; }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important; }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important; }
  .m-sm-2 {
    margin: 0.5rem !important; }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important; }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important; }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important; }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important; }
  .m-sm-3 {
    margin: 1rem !important; }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important; }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important; }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important; }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important; }
  .m-sm-4 {
    margin: 1.5rem !important; }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important; }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important; }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important; }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important; }
  .m-sm-5 {
    margin: 3rem !important; }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important; }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important; }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important; }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important; }
  .p-sm-0 {
    padding: 0 !important; }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important; }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important; }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important; }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important; }
  .p-sm-1 {
    padding: 0.25rem !important; }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important; }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important; }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important; }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important; }
  .p-sm-2 {
    padding: 0.5rem !important; }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important; }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important; }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important; }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important; }
  .p-sm-3 {
    padding: 1rem !important; }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important; }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important; }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important; }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important; }
  .p-sm-4 {
    padding: 1.5rem !important; }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important; }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important; }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important; }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important; }
  .p-sm-5 {
    padding: 3rem !important; }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important; }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important; }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important; }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important; }
  .m-sm-auto {
    margin: auto !important; }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important; }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important; }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important; }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important; } }

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important; }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important; }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important; }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important; }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important; }
  .m-md-1 {
    margin: 0.25rem !important; }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important; }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important; }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important; }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important; }
  .m-md-2 {
    margin: 0.5rem !important; }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important; }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important; }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important; }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important; }
  .m-md-3 {
    margin: 1rem !important; }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important; }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important; }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important; }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important; }
  .m-md-4 {
    margin: 1.5rem !important; }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important; }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important; }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important; }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important; }
  .m-md-5 {
    margin: 3rem !important; }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important; }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important; }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important; }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important; }
  .p-md-0 {
    padding: 0 !important; }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important; }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important; }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important; }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important; }
  .p-md-1 {
    padding: 0.25rem !important; }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important; }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important; }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important; }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important; }
  .p-md-2 {
    padding: 0.5rem !important; }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important; }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important; }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important; }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important; }
  .p-md-3 {
    padding: 1rem !important; }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important; }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important; }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important; }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important; }
  .p-md-4 {
    padding: 1.5rem !important; }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important; }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important; }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important; }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important; }
  .p-md-5 {
    padding: 3rem !important; }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important; }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important; }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important; }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important; }
  .m-md-auto {
    margin: auto !important; }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important; }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important; }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important; }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important; } }

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important; }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important; }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important; }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important; }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important; }
  .m-lg-1 {
    margin: 0.25rem !important; }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important; }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important; }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important; }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important; }
  .m-lg-2 {
    margin: 0.5rem !important; }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important; }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important; }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important; }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important; }
  .m-lg-3 {
    margin: 1rem !important; }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important; }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important; }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important; }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important; }
  .m-lg-4 {
    margin: 1.5rem !important; }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important; }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important; }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important; }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important; }
  .m-lg-5 {
    margin: 3rem !important; }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important; }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important; }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important; }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important; }
  .p-lg-0 {
    padding: 0 !important; }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important; }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important; }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important; }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important; }
  .p-lg-1 {
    padding: 0.25rem !important; }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important; }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important; }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important; }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important; }
  .p-lg-2 {
    padding: 0.5rem !important; }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important; }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important; }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important; }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important; }
  .p-lg-3 {
    padding: 1rem !important; }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important; }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important; }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important; }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important; }
  .p-lg-4 {
    padding: 1.5rem !important; }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important; }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important; }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important; }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important; }
  .p-lg-5 {
    padding: 3rem !important; }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important; }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important; }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important; }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important; }
  .m-lg-auto {
    margin: auto !important; }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important; }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important; }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important; }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important; } }

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important; }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important; }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important; }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important; }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important; }
  .m-xl-1 {
    margin: 0.25rem !important; }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important; }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important; }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important; }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important; }
  .m-xl-2 {
    margin: 0.5rem !important; }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important; }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important; }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important; }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important; }
  .m-xl-3 {
    margin: 1rem !important; }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important; }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important; }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important; }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important; }
  .m-xl-4 {
    margin: 1.5rem !important; }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important; }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important; }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important; }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important; }
  .m-xl-5 {
    margin: 3rem !important; }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important; }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important; }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important; }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important; }
  .p-xl-0 {
    padding: 0 !important; }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important; }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important; }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important; }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important; }
  .p-xl-1 {
    padding: 0.25rem !important; }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important; }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important; }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important; }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important; }
  .p-xl-2 {
    padding: 0.5rem !important; }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important; }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important; }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important; }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important; }
  .p-xl-3 {
    padding: 1rem !important; }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important; }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important; }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important; }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important; }
  .p-xl-4 {
    padding: 1.5rem !important; }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important; }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important; }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important; }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important; }
  .p-xl-5 {
    padding: 3rem !important; }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important; }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important; }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important; }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important; }
  .m-xl-auto {
    margin: auto !important; }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important; }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important; }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important; }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important; } }

.text-justify {
  text-align: justify !important; }

.text-nowrap {
  white-space: nowrap !important; }

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; }

.text-left {
  text-align: left !important; }

.text-right {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important; }
  .text-sm-right {
    text-align: right !important; }
  .text-sm-center {
    text-align: center !important; } }

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important; }
  .text-md-right {
    text-align: right !important; }
  .text-md-center {
    text-align: center !important; } }

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important; }
  .text-lg-right {
    text-align: right !important; }
  .text-lg-center {
    text-align: center !important; } }

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important; }
  .text-xl-right {
    text-align: right !important; }
  .text-xl-center {
    text-align: center !important; } }

.text-lowercase {
  text-transform: lowercase !important; }

.text-uppercase {
  text-transform: uppercase !important; }

.text-capitalize {
  text-transform: capitalize !important; }

.font-weight-light {
  font-weight: 300 !important; }

.font-weight-normal {
  font-weight: 400 !important; }

.font-weight-bold {
  font-weight: 700 !important; }

.font-italic {
  font-style: italic !important; }

.text-white {
  color: #fff !important; }

.text-primary {
  color: #009688 !important; }

a.text-primary:hover, a.text-primary:focus {
  color: #00635a !important; }

.text-secondary {
  color: #6c757d !important; }

a.text-secondary:hover, a.text-secondary:focus {
  color: #545b62 !important; }

.text-success {
  color: #4caf50 !important; }

a.text-success:hover, a.text-success:focus {
  color: #3d8b40 !important; }

.text-info {
  color: #03a9f4 !important; }

a.text-info:hover, a.text-info:focus {
  color: #0286c2 !important; }

.text-warning {
  color: #ff5722 !important; }

a.text-warning:hover, a.text-warning:focus {
  color: #ee3900 !important; }

.text-danger {
  color: #f44336 !important; }

a.text-danger:hover, a.text-danger:focus {
  color: #ea1c0d !important; }

.text-light {
  color: #f5f5f5 !important; }

a.text-light:hover, a.text-light:focus {
  color: gainsboro !important; }

.text-dark {
  color: #424242 !important; }

a.text-dark:hover, a.text-dark:focus {
  color: #292929 !important; }

.text-muted, .bmd-help {
  color: #6c757d !important; }

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0; }

.visible {
  visibility: visible !important; }

.invisible {
  visibility: hidden !important; }

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important; }
  a:not(.btn):not(.custom-file-control::before) {
    text-decoration: underline; }
  abbr[title]::after {
    content: " (" attr(title) ")"; }
  pre {
    white-space: pre-wrap !important; }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid; }
  thead {
    display: table-header-group; }
  tr,
  img {
    page-break-inside: avoid; }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3; }
  h2,
  h3 {
    page-break-after: avoid; }
  @page {
    size: a3; }
  body {
    min-width: 992px !important; }
  .container {
    min-width: 992px !important; }
  .navbar {
    display: none; }
  .badge {
    border: 1px solid #000; }
  .table {
    border-collapse: collapse !important; }
    .table td,
    .table th {
      background-color: #fff !important; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important; } }

body {
  font-weight: 400; }

a:focus {
  outline: none; }

button:focus {
  outline: none; }

.bmd-layout-canvas {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100%; }

.bmd-layout-container {
  position: relative;
  flex: 1;
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100%;
  overflow: hidden; }

.bmd-layout-header {
  z-index: 3;
  display: flex;
  flex-direction: column;
  flex-wrap: nowrap;
  flex-shrink: 0;
  justify-content: flex-start;
  width: 100%;
  max-height: 1000px;
  transform: translateZ(0);
  transition-duration: 0.2s;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }

.bmd-layout-content {
  position: relative;
  z-index: 1;
  display: inline-block;
  flex-grow: 1;
  overflow-x: hidden;
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
  transition-duration: 0.2s;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }

.bmd-layout-spacer {
  flex-grow: 1; }

.bmd-layout-backdrop {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 4;
  width: 100%;
  height: 100%;
  visibility: hidden;
  background-color: transparent;
  transition-property: background-color;
  transition-duration: 0.2s;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }
  @supports (pointer-events: auto) {
    .bmd-layout-backdrop {
      background-color: rgba(0, 0, 0, 0.5);
      opacity: 0;
      transition-property: opacity;
      visibility: visible;
      pointer-events: none; } }

.btn, .custom-file-control::before {
  position: relative;
  margin-bottom: 0.3125rem;
  font-size: 0.875rem;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 0;
  cursor: pointer;
  background-color: transparent;
  border: 0;
  outline: 0;
  transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1), color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  will-change: box-shadow, transform;
  color: rgba(0, 0, 0, 0.87);
  background-color: transparent;
  border-color: #ccc; }
  .btn:hover, .custom-file-control:hover::before {
    color: rgba(0, 0, 0, 0.87);
    background-color: rgba(153, 153, 153, 0.2);
    border-color: rgba(153, 153, 153, 0.2); }
  .btn:focus, .custom-file-control:focus::before, .btn.focus, .focus.custom-file-control::before {
    color: rgba(0, 0, 0, 0.87);
    background-color: rgba(153, 153, 153, 0.2);
    border-color: rgba(153, 153, 153, 0.2); }
  .btn:active, .custom-file-control:active::before, .btn.active, .active.custom-file-control::before,
  .open > .btn.dropdown-toggle,
  .open > .dropdown-toggle.custom-file-control::before {
    color: rgba(0, 0, 0, 0.87);
    background-color: rgba(153, 153, 153, 0.2);
    border-color: rgba(153, 153, 153, 0.2); }
    .btn:active:hover, .custom-file-control:active:hover::before, .btn:active:focus, .custom-file-control:active:focus::before, .btn:active.focus, .custom-file-control:active.focus::before, .btn.active:hover, .active.custom-file-control:hover::before, .btn.active:focus, .active.custom-file-control:focus::before, .btn.active.focus, .active.focus.custom-file-control::before,
    .open > .btn.dropdown-toggle:hover,
    .open > .dropdown-toggle.custom-file-control:hover::before,
    .open > .btn.dropdown-toggle:focus,
    .open > .dropdown-toggle.custom-file-control:focus::before,
    .open > .btn.dropdown-toggle.focus,
    .open > .dropdown-toggle.focus.custom-file-control::before {
      color: rgba(0, 0, 0, 0.87);
      background-color: rgba(153, 153, 153, 0.4);
      border-color: rgba(153, 153, 153, 0.4); }
  .open > .btn.dropdown-toggle.bmd-btn-icon, .open > .dropdown-toggle.bmd-btn-icon.custom-file-control::before {
    color: inherit;
    background-color: transparent; }
    .open > .btn.dropdown-toggle.bmd-btn-icon:hover, .open > .dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
      background-color: rgba(153, 153, 153, 0.2); }
  .btn.disabled:focus, .disabled.custom-file-control:focus::before, .btn.disabled.focus, .disabled.focus.custom-file-control::before, .btn:disabled:focus, .custom-file-control:disabled:focus::before, .btn:disabled.focus, .custom-file-control:disabled.focus::before {
    background-color: transparent;
    border-color: #ccc; }
  .btn.disabled:hover, .disabled.custom-file-control:hover::before, .btn:disabled:hover, .custom-file-control:disabled:hover::before {
    background-color: transparent;
    border-color: #ccc; }
  .bg-inverse .btn, .bg-inverse .custom-file-control::before {
    color: rgba(0, 0, 0, 0.87);
    background-color: transparent;
    border-color: #ccc; }
    .bg-inverse .btn:hover, .bg-inverse .custom-file-control:hover::before {
      color: rgba(0, 0, 0, 0.87);
      background-color: rgba(204, 204, 204, 0.15);
      border-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn:focus, .bg-inverse .custom-file-control:focus::before, .bg-inverse .btn.focus, .bg-inverse .focus.custom-file-control::before {
      color: rgba(0, 0, 0, 0.87);
      background-color: rgba(204, 204, 204, 0.15);
      border-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn:active, .bg-inverse .custom-file-control:active::before, .bg-inverse .btn.active, .bg-inverse .active.custom-file-control::before,
    .open > .bg-inverse .btn.dropdown-toggle,
    .open > .bg-inverse .dropdown-toggle.custom-file-control::before {
      color: rgba(0, 0, 0, 0.87);
      background-color: rgba(204, 204, 204, 0.15);
      border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn:active:hover, .bg-inverse .custom-file-control:active:hover::before, .bg-inverse .btn:active:focus, .bg-inverse .custom-file-control:active:focus::before, .bg-inverse .btn:active.focus, .bg-inverse .custom-file-control:active.focus::before, .bg-inverse .btn.active:hover, .bg-inverse .active.custom-file-control:hover::before, .bg-inverse .btn.active:focus, .bg-inverse .active.custom-file-control:focus::before, .bg-inverse .btn.active.focus, .bg-inverse .active.focus.custom-file-control::before,
      .open > .bg-inverse .btn.dropdown-toggle:hover,
      .open > .bg-inverse .dropdown-toggle.custom-file-control:hover::before,
      .open > .bg-inverse .btn.dropdown-toggle:focus,
      .open > .bg-inverse .dropdown-toggle.custom-file-control:focus::before,
      .open > .bg-inverse .btn.dropdown-toggle.focus,
      .open > .bg-inverse .dropdown-toggle.focus.custom-file-control::before {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(204, 204, 204, 0.25);
        border-color: rgba(204, 204, 204, 0.25); }
    .open > .bg-inverse .btn.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .bg-inverse .btn.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.disabled:focus, .bg-inverse .disabled.custom-file-control:focus::before, .bg-inverse .btn.disabled.focus, .bg-inverse .disabled.focus.custom-file-control::before, .bg-inverse .btn:disabled:focus, .bg-inverse .custom-file-control:disabled:focus::before, .bg-inverse .btn:disabled.focus, .bg-inverse .custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #ccc; }
    .bg-inverse .btn.disabled:hover, .bg-inverse .disabled.custom-file-control:hover::before, .bg-inverse .btn:disabled:hover, .bg-inverse .custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #ccc; }
  .btn.btn-link, .btn-link.custom-file-control::before {
    background-color: transparent; }
  .btn.btn-primary, .btn-primary.custom-file-control::before {
    color: #009688;
    background-color: transparent;
    border-color: #ccc; }
    .btn.btn-primary:hover, .btn-primary.custom-file-control:hover::before {
      color: #009688;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-primary:focus, .btn-primary.custom-file-control:focus::before, .btn.btn-primary.focus, .btn-primary.focus.custom-file-control::before {
      color: #009688;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-primary:active, .btn-primary.custom-file-control:active::before, .btn.btn-primary.active, .btn-primary.active.custom-file-control::before,
    .open > .btn.btn-primary.dropdown-toggle,
    .open > .btn-primary.dropdown-toggle.custom-file-control::before {
      color: #009688;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
      .btn.btn-primary:active:hover, .btn-primary.custom-file-control:active:hover::before, .btn.btn-primary:active:focus, .btn-primary.custom-file-control:active:focus::before, .btn.btn-primary:active.focus, .btn-primary.custom-file-control:active.focus::before, .btn.btn-primary.active:hover, .btn-primary.active.custom-file-control:hover::before, .btn.btn-primary.active:focus, .btn-primary.active.custom-file-control:focus::before, .btn.btn-primary.active.focus, .btn-primary.active.focus.custom-file-control::before,
      .open > .btn.btn-primary.dropdown-toggle:hover,
      .open > .btn-primary.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-primary.dropdown-toggle:focus,
      .open > .btn-primary.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-primary.dropdown-toggle.focus,
      .open > .btn-primary.dropdown-toggle.focus.custom-file-control::before {
        color: #009688;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: rgba(153, 153, 153, 0.4); }
    .open > .btn.btn-primary.dropdown-toggle.bmd-btn-icon, .open > .btn-primary.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .btn.btn-primary.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-primary.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-primary.disabled:focus, .btn-primary.disabled.custom-file-control:focus::before, .btn.btn-primary.disabled.focus, .btn-primary.disabled.focus.custom-file-control::before, .btn.btn-primary:disabled:focus, .btn-primary.custom-file-control:disabled:focus::before, .btn.btn-primary:disabled.focus, .btn-primary.custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #ccc; }
    .btn.btn-primary.disabled:hover, .btn-primary.disabled.custom-file-control:hover::before, .btn.btn-primary:disabled:hover, .btn-primary.custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #ccc; }
    .bg-inverse .btn.btn-primary, .bg-inverse .btn-primary.custom-file-control::before {
      color: #009688;
      background-color: transparent;
      border-color: #ccc; }
      .bg-inverse .btn.btn-primary:hover, .bg-inverse .btn-primary.custom-file-control:hover::before {
        color: #009688;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-primary:focus, .bg-inverse .btn-primary.custom-file-control:focus::before, .bg-inverse .btn.btn-primary.focus, .bg-inverse .btn-primary.focus.custom-file-control::before {
        color: #009688;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-primary:active, .bg-inverse .btn-primary.custom-file-control:active::before, .bg-inverse .btn.btn-primary.active, .bg-inverse .btn-primary.active.custom-file-control::before,
      .open > .bg-inverse .btn.btn-primary.dropdown-toggle,
      .open > .bg-inverse .btn-primary.dropdown-toggle.custom-file-control::before {
        color: #009688;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
        .bg-inverse .btn.btn-primary:active:hover, .bg-inverse .btn-primary.custom-file-control:active:hover::before, .bg-inverse .btn.btn-primary:active:focus, .bg-inverse .btn-primary.custom-file-control:active:focus::before, .bg-inverse .btn.btn-primary:active.focus, .bg-inverse .btn-primary.custom-file-control:active.focus::before, .bg-inverse .btn.btn-primary.active:hover, .bg-inverse .btn-primary.active.custom-file-control:hover::before, .bg-inverse .btn.btn-primary.active:focus, .bg-inverse .btn-primary.active.custom-file-control:focus::before, .bg-inverse .btn.btn-primary.active.focus, .bg-inverse .btn-primary.active.focus.custom-file-control::before,
        .open > .bg-inverse .btn.btn-primary.dropdown-toggle:hover,
        .open > .bg-inverse .btn-primary.dropdown-toggle.custom-file-control:hover::before,
        .open > .bg-inverse .btn.btn-primary.dropdown-toggle:focus,
        .open > .bg-inverse .btn-primary.dropdown-toggle.custom-file-control:focus::before,
        .open > .bg-inverse .btn.btn-primary.dropdown-toggle.focus,
        .open > .bg-inverse .btn-primary.dropdown-toggle.focus.custom-file-control::before {
          color: #009688;
          background-color: rgba(204, 204, 204, 0.25);
          border-color: rgba(204, 204, 204, 0.25); }
      .open > .bg-inverse .btn.btn-primary.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .btn-primary.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
        color: inherit;
        background-color: transparent; }
        .open > .bg-inverse .btn.btn-primary.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .btn-primary.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
          background-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-primary.disabled:focus, .bg-inverse .btn-primary.disabled.custom-file-control:focus::before, .bg-inverse .btn.btn-primary.disabled.focus, .bg-inverse .btn-primary.disabled.focus.custom-file-control::before, .bg-inverse .btn.btn-primary:disabled:focus, .bg-inverse .btn-primary.custom-file-control:disabled:focus::before, .bg-inverse .btn.btn-primary:disabled.focus, .bg-inverse .btn-primary.custom-file-control:disabled.focus::before {
        background-color: transparent;
        border-color: #ccc; }
      .bg-inverse .btn.btn-primary.disabled:hover, .bg-inverse .btn-primary.disabled.custom-file-control:hover::before, .bg-inverse .btn.btn-primary:disabled:hover, .bg-inverse .btn-primary.custom-file-control:disabled:hover::before {
        background-color: transparent;
        border-color: #ccc; }
    .btn.btn-primary.btn-link, .btn-primary.btn-link.custom-file-control::before {
      background-color: transparent; }
  .btn.btn-secondary, .btn-secondary.custom-file-control::before {
    color: #6c757d;
    background-color: transparent;
    border-color: #ccc; }
    .btn.btn-secondary:hover, .btn-secondary.custom-file-control:hover::before {
      color: #6c757d;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-secondary:focus, .btn-secondary.custom-file-control:focus::before, .btn.btn-secondary.focus, .btn-secondary.focus.custom-file-control::before {
      color: #6c757d;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-secondary:active, .btn-secondary.custom-file-control:active::before, .btn.btn-secondary.active, .btn-secondary.active.custom-file-control::before,
    .open > .btn.btn-secondary.dropdown-toggle,
    .open > .btn-secondary.dropdown-toggle.custom-file-control::before {
      color: #6c757d;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
      .btn.btn-secondary:active:hover, .btn-secondary.custom-file-control:active:hover::before, .btn.btn-secondary:active:focus, .btn-secondary.custom-file-control:active:focus::before, .btn.btn-secondary:active.focus, .btn-secondary.custom-file-control:active.focus::before, .btn.btn-secondary.active:hover, .btn-secondary.active.custom-file-control:hover::before, .btn.btn-secondary.active:focus, .btn-secondary.active.custom-file-control:focus::before, .btn.btn-secondary.active.focus, .btn-secondary.active.focus.custom-file-control::before,
      .open > .btn.btn-secondary.dropdown-toggle:hover,
      .open > .btn-secondary.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-secondary.dropdown-toggle:focus,
      .open > .btn-secondary.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-secondary.dropdown-toggle.focus,
      .open > .btn-secondary.dropdown-toggle.focus.custom-file-control::before {
        color: #6c757d;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: rgba(153, 153, 153, 0.4); }
    .open > .btn.btn-secondary.dropdown-toggle.bmd-btn-icon, .open > .btn-secondary.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .btn.btn-secondary.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-secondary.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-secondary.disabled:focus, .btn-secondary.disabled.custom-file-control:focus::before, .btn.btn-secondary.disabled.focus, .btn-secondary.disabled.focus.custom-file-control::before, .btn.btn-secondary:disabled:focus, .btn-secondary.custom-file-control:disabled:focus::before, .btn.btn-secondary:disabled.focus, .btn-secondary.custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #ccc; }
    .btn.btn-secondary.disabled:hover, .btn-secondary.disabled.custom-file-control:hover::before, .btn.btn-secondary:disabled:hover, .btn-secondary.custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #ccc; }
    .bg-inverse .btn.btn-secondary, .bg-inverse .btn-secondary.custom-file-control::before {
      color: #6c757d;
      background-color: transparent;
      border-color: #ccc; }
      .bg-inverse .btn.btn-secondary:hover, .bg-inverse .btn-secondary.custom-file-control:hover::before {
        color: #6c757d;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-secondary:focus, .bg-inverse .btn-secondary.custom-file-control:focus::before, .bg-inverse .btn.btn-secondary.focus, .bg-inverse .btn-secondary.focus.custom-file-control::before {
        color: #6c757d;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-secondary:active, .bg-inverse .btn-secondary.custom-file-control:active::before, .bg-inverse .btn.btn-secondary.active, .bg-inverse .btn-secondary.active.custom-file-control::before,
      .open > .bg-inverse .btn.btn-secondary.dropdown-toggle,
      .open > .bg-inverse .btn-secondary.dropdown-toggle.custom-file-control::before {
        color: #6c757d;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
        .bg-inverse .btn.btn-secondary:active:hover, .bg-inverse .btn-secondary.custom-file-control:active:hover::before, .bg-inverse .btn.btn-secondary:active:focus, .bg-inverse .btn-secondary.custom-file-control:active:focus::before, .bg-inverse .btn.btn-secondary:active.focus, .bg-inverse .btn-secondary.custom-file-control:active.focus::before, .bg-inverse .btn.btn-secondary.active:hover, .bg-inverse .btn-secondary.active.custom-file-control:hover::before, .bg-inverse .btn.btn-secondary.active:focus, .bg-inverse .btn-secondary.active.custom-file-control:focus::before, .bg-inverse .btn.btn-secondary.active.focus, .bg-inverse .btn-secondary.active.focus.custom-file-control::before,
        .open > .bg-inverse .btn.btn-secondary.dropdown-toggle:hover,
        .open > .bg-inverse .btn-secondary.dropdown-toggle.custom-file-control:hover::before,
        .open > .bg-inverse .btn.btn-secondary.dropdown-toggle:focus,
        .open > .bg-inverse .btn-secondary.dropdown-toggle.custom-file-control:focus::before,
        .open > .bg-inverse .btn.btn-secondary.dropdown-toggle.focus,
        .open > .bg-inverse .btn-secondary.dropdown-toggle.focus.custom-file-control::before {
          color: #6c757d;
          background-color: rgba(204, 204, 204, 0.25);
          border-color: rgba(204, 204, 204, 0.25); }
      .open > .bg-inverse .btn.btn-secondary.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .btn-secondary.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
        color: inherit;
        background-color: transparent; }
        .open > .bg-inverse .btn.btn-secondary.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .btn-secondary.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
          background-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-secondary.disabled:focus, .bg-inverse .btn-secondary.disabled.custom-file-control:focus::before, .bg-inverse .btn.btn-secondary.disabled.focus, .bg-inverse .btn-secondary.disabled.focus.custom-file-control::before, .bg-inverse .btn.btn-secondary:disabled:focus, .bg-inverse .btn-secondary.custom-file-control:disabled:focus::before, .bg-inverse .btn.btn-secondary:disabled.focus, .bg-inverse .btn-secondary.custom-file-control:disabled.focus::before {
        background-color: transparent;
        border-color: #ccc; }
      .bg-inverse .btn.btn-secondary.disabled:hover, .bg-inverse .btn-secondary.disabled.custom-file-control:hover::before, .bg-inverse .btn.btn-secondary:disabled:hover, .bg-inverse .btn-secondary.custom-file-control:disabled:hover::before {
        background-color: transparent;
        border-color: #ccc; }
    .btn.btn-secondary.btn-link, .btn-secondary.btn-link.custom-file-control::before {
      background-color: transparent; }
  .btn.btn-success, .btn-success.custom-file-control::before {
    color: #4caf50;
    background-color: transparent;
    border-color: #ccc; }
    .btn.btn-success:hover, .btn-success.custom-file-control:hover::before {
      color: #4caf50;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-success:focus, .btn-success.custom-file-control:focus::before, .btn.btn-success.focus, .btn-success.focus.custom-file-control::before {
      color: #4caf50;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-success:active, .btn-success.custom-file-control:active::before, .btn.btn-success.active, .btn-success.active.custom-file-control::before,
    .open > .btn.btn-success.dropdown-toggle,
    .open > .btn-success.dropdown-toggle.custom-file-control::before {
      color: #4caf50;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
      .btn.btn-success:active:hover, .btn-success.custom-file-control:active:hover::before, .btn.btn-success:active:focus, .btn-success.custom-file-control:active:focus::before, .btn.btn-success:active.focus, .btn-success.custom-file-control:active.focus::before, .btn.btn-success.active:hover, .btn-success.active.custom-file-control:hover::before, .btn.btn-success.active:focus, .btn-success.active.custom-file-control:focus::before, .btn.btn-success.active.focus, .btn-success.active.focus.custom-file-control::before,
      .open > .btn.btn-success.dropdown-toggle:hover,
      .open > .btn-success.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-success.dropdown-toggle:focus,
      .open > .btn-success.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-success.dropdown-toggle.focus,
      .open > .btn-success.dropdown-toggle.focus.custom-file-control::before {
        color: #4caf50;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: rgba(153, 153, 153, 0.4); }
    .open > .btn.btn-success.dropdown-toggle.bmd-btn-icon, .open > .btn-success.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .btn.btn-success.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-success.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-success.disabled:focus, .btn-success.disabled.custom-file-control:focus::before, .btn.btn-success.disabled.focus, .btn-success.disabled.focus.custom-file-control::before, .btn.btn-success:disabled:focus, .btn-success.custom-file-control:disabled:focus::before, .btn.btn-success:disabled.focus, .btn-success.custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #ccc; }
    .btn.btn-success.disabled:hover, .btn-success.disabled.custom-file-control:hover::before, .btn.btn-success:disabled:hover, .btn-success.custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #ccc; }
    .bg-inverse .btn.btn-success, .bg-inverse .btn-success.custom-file-control::before {
      color: #4caf50;
      background-color: transparent;
      border-color: #ccc; }
      .bg-inverse .btn.btn-success:hover, .bg-inverse .btn-success.custom-file-control:hover::before {
        color: #4caf50;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-success:focus, .bg-inverse .btn-success.custom-file-control:focus::before, .bg-inverse .btn.btn-success.focus, .bg-inverse .btn-success.focus.custom-file-control::before {
        color: #4caf50;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-success:active, .bg-inverse .btn-success.custom-file-control:active::before, .bg-inverse .btn.btn-success.active, .bg-inverse .btn-success.active.custom-file-control::before,
      .open > .bg-inverse .btn.btn-success.dropdown-toggle,
      .open > .bg-inverse .btn-success.dropdown-toggle.custom-file-control::before {
        color: #4caf50;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
        .bg-inverse .btn.btn-success:active:hover, .bg-inverse .btn-success.custom-file-control:active:hover::before, .bg-inverse .btn.btn-success:active:focus, .bg-inverse .btn-success.custom-file-control:active:focus::before, .bg-inverse .btn.btn-success:active.focus, .bg-inverse .btn-success.custom-file-control:active.focus::before, .bg-inverse .btn.btn-success.active:hover, .bg-inverse .btn-success.active.custom-file-control:hover::before, .bg-inverse .btn.btn-success.active:focus, .bg-inverse .btn-success.active.custom-file-control:focus::before, .bg-inverse .btn.btn-success.active.focus, .bg-inverse .btn-success.active.focus.custom-file-control::before,
        .open > .bg-inverse .btn.btn-success.dropdown-toggle:hover,
        .open > .bg-inverse .btn-success.dropdown-toggle.custom-file-control:hover::before,
        .open > .bg-inverse .btn.btn-success.dropdown-toggle:focus,
        .open > .bg-inverse .btn-success.dropdown-toggle.custom-file-control:focus::before,
        .open > .bg-inverse .btn.btn-success.dropdown-toggle.focus,
        .open > .bg-inverse .btn-success.dropdown-toggle.focus.custom-file-control::before {
          color: #4caf50;
          background-color: rgba(204, 204, 204, 0.25);
          border-color: rgba(204, 204, 204, 0.25); }
      .open > .bg-inverse .btn.btn-success.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .btn-success.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
        color: inherit;
        background-color: transparent; }
        .open > .bg-inverse .btn.btn-success.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .btn-success.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
          background-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-success.disabled:focus, .bg-inverse .btn-success.disabled.custom-file-control:focus::before, .bg-inverse .btn.btn-success.disabled.focus, .bg-inverse .btn-success.disabled.focus.custom-file-control::before, .bg-inverse .btn.btn-success:disabled:focus, .bg-inverse .btn-success.custom-file-control:disabled:focus::before, .bg-inverse .btn.btn-success:disabled.focus, .bg-inverse .btn-success.custom-file-control:disabled.focus::before {
        background-color: transparent;
        border-color: #ccc; }
      .bg-inverse .btn.btn-success.disabled:hover, .bg-inverse .btn-success.disabled.custom-file-control:hover::before, .bg-inverse .btn.btn-success:disabled:hover, .bg-inverse .btn-success.custom-file-control:disabled:hover::before {
        background-color: transparent;
        border-color: #ccc; }
    .btn.btn-success.btn-link, .btn-success.btn-link.custom-file-control::before {
      background-color: transparent; }
  .btn.btn-info, .btn-info.custom-file-control::before {
    color: #03a9f4;
    background-color: transparent;
    border-color: #ccc; }
    .btn.btn-info:hover, .btn-info.custom-file-control:hover::before {
      color: #03a9f4;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-info:focus, .btn-info.custom-file-control:focus::before, .btn.btn-info.focus, .btn-info.focus.custom-file-control::before {
      color: #03a9f4;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-info:active, .btn-info.custom-file-control:active::before, .btn.btn-info.active, .btn-info.active.custom-file-control::before,
    .open > .btn.btn-info.dropdown-toggle,
    .open > .btn-info.dropdown-toggle.custom-file-control::before {
      color: #03a9f4;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
      .btn.btn-info:active:hover, .btn-info.custom-file-control:active:hover::before, .btn.btn-info:active:focus, .btn-info.custom-file-control:active:focus::before, .btn.btn-info:active.focus, .btn-info.custom-file-control:active.focus::before, .btn.btn-info.active:hover, .btn-info.active.custom-file-control:hover::before, .btn.btn-info.active:focus, .btn-info.active.custom-file-control:focus::before, .btn.btn-info.active.focus, .btn-info.active.focus.custom-file-control::before,
      .open > .btn.btn-info.dropdown-toggle:hover,
      .open > .btn-info.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-info.dropdown-toggle:focus,
      .open > .btn-info.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-info.dropdown-toggle.focus,
      .open > .btn-info.dropdown-toggle.focus.custom-file-control::before {
        color: #03a9f4;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: rgba(153, 153, 153, 0.4); }
    .open > .btn.btn-info.dropdown-toggle.bmd-btn-icon, .open > .btn-info.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .btn.btn-info.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-info.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-info.disabled:focus, .btn-info.disabled.custom-file-control:focus::before, .btn.btn-info.disabled.focus, .btn-info.disabled.focus.custom-file-control::before, .btn.btn-info:disabled:focus, .btn-info.custom-file-control:disabled:focus::before, .btn.btn-info:disabled.focus, .btn-info.custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #ccc; }
    .btn.btn-info.disabled:hover, .btn-info.disabled.custom-file-control:hover::before, .btn.btn-info:disabled:hover, .btn-info.custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #ccc; }
    .bg-inverse .btn.btn-info, .bg-inverse .btn-info.custom-file-control::before {
      color: #03a9f4;
      background-color: transparent;
      border-color: #ccc; }
      .bg-inverse .btn.btn-info:hover, .bg-inverse .btn-info.custom-file-control:hover::before {
        color: #03a9f4;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-info:focus, .bg-inverse .btn-info.custom-file-control:focus::before, .bg-inverse .btn.btn-info.focus, .bg-inverse .btn-info.focus.custom-file-control::before {
        color: #03a9f4;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-info:active, .bg-inverse .btn-info.custom-file-control:active::before, .bg-inverse .btn.btn-info.active, .bg-inverse .btn-info.active.custom-file-control::before,
      .open > .bg-inverse .btn.btn-info.dropdown-toggle,
      .open > .bg-inverse .btn-info.dropdown-toggle.custom-file-control::before {
        color: #03a9f4;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
        .bg-inverse .btn.btn-info:active:hover, .bg-inverse .btn-info.custom-file-control:active:hover::before, .bg-inverse .btn.btn-info:active:focus, .bg-inverse .btn-info.custom-file-control:active:focus::before, .bg-inverse .btn.btn-info:active.focus, .bg-inverse .btn-info.custom-file-control:active.focus::before, .bg-inverse .btn.btn-info.active:hover, .bg-inverse .btn-info.active.custom-file-control:hover::before, .bg-inverse .btn.btn-info.active:focus, .bg-inverse .btn-info.active.custom-file-control:focus::before, .bg-inverse .btn.btn-info.active.focus, .bg-inverse .btn-info.active.focus.custom-file-control::before,
        .open > .bg-inverse .btn.btn-info.dropdown-toggle:hover,
        .open > .bg-inverse .btn-info.dropdown-toggle.custom-file-control:hover::before,
        .open > .bg-inverse .btn.btn-info.dropdown-toggle:focus,
        .open > .bg-inverse .btn-info.dropdown-toggle.custom-file-control:focus::before,
        .open > .bg-inverse .btn.btn-info.dropdown-toggle.focus,
        .open > .bg-inverse .btn-info.dropdown-toggle.focus.custom-file-control::before {
          color: #03a9f4;
          background-color: rgba(204, 204, 204, 0.25);
          border-color: rgba(204, 204, 204, 0.25); }
      .open > .bg-inverse .btn.btn-info.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .btn-info.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
        color: inherit;
        background-color: transparent; }
        .open > .bg-inverse .btn.btn-info.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .btn-info.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
          background-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-info.disabled:focus, .bg-inverse .btn-info.disabled.custom-file-control:focus::before, .bg-inverse .btn.btn-info.disabled.focus, .bg-inverse .btn-info.disabled.focus.custom-file-control::before, .bg-inverse .btn.btn-info:disabled:focus, .bg-inverse .btn-info.custom-file-control:disabled:focus::before, .bg-inverse .btn.btn-info:disabled.focus, .bg-inverse .btn-info.custom-file-control:disabled.focus::before {
        background-color: transparent;
        border-color: #ccc; }
      .bg-inverse .btn.btn-info.disabled:hover, .bg-inverse .btn-info.disabled.custom-file-control:hover::before, .bg-inverse .btn.btn-info:disabled:hover, .bg-inverse .btn-info.custom-file-control:disabled:hover::before {
        background-color: transparent;
        border-color: #ccc; }
    .btn.btn-info.btn-link, .btn-info.btn-link.custom-file-control::before {
      background-color: transparent; }
  .btn.btn-warning, .btn-warning.custom-file-control::before {
    color: #ff5722;
    background-color: transparent;
    border-color: #ccc; }
    .btn.btn-warning:hover, .btn-warning.custom-file-control:hover::before {
      color: #ff5722;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-warning:focus, .btn-warning.custom-file-control:focus::before, .btn.btn-warning.focus, .btn-warning.focus.custom-file-control::before {
      color: #ff5722;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-warning:active, .btn-warning.custom-file-control:active::before, .btn.btn-warning.active, .btn-warning.active.custom-file-control::before,
    .open > .btn.btn-warning.dropdown-toggle,
    .open > .btn-warning.dropdown-toggle.custom-file-control::before {
      color: #ff5722;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
      .btn.btn-warning:active:hover, .btn-warning.custom-file-control:active:hover::before, .btn.btn-warning:active:focus, .btn-warning.custom-file-control:active:focus::before, .btn.btn-warning:active.focus, .btn-warning.custom-file-control:active.focus::before, .btn.btn-warning.active:hover, .btn-warning.active.custom-file-control:hover::before, .btn.btn-warning.active:focus, .btn-warning.active.custom-file-control:focus::before, .btn.btn-warning.active.focus, .btn-warning.active.focus.custom-file-control::before,
      .open > .btn.btn-warning.dropdown-toggle:hover,
      .open > .btn-warning.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-warning.dropdown-toggle:focus,
      .open > .btn-warning.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-warning.dropdown-toggle.focus,
      .open > .btn-warning.dropdown-toggle.focus.custom-file-control::before {
        color: #ff5722;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: rgba(153, 153, 153, 0.4); }
    .open > .btn.btn-warning.dropdown-toggle.bmd-btn-icon, .open > .btn-warning.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .btn.btn-warning.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-warning.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-warning.disabled:focus, .btn-warning.disabled.custom-file-control:focus::before, .btn.btn-warning.disabled.focus, .btn-warning.disabled.focus.custom-file-control::before, .btn.btn-warning:disabled:focus, .btn-warning.custom-file-control:disabled:focus::before, .btn.btn-warning:disabled.focus, .btn-warning.custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #ccc; }
    .btn.btn-warning.disabled:hover, .btn-warning.disabled.custom-file-control:hover::before, .btn.btn-warning:disabled:hover, .btn-warning.custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #ccc; }
    .bg-inverse .btn.btn-warning, .bg-inverse .btn-warning.custom-file-control::before {
      color: #ff5722;
      background-color: transparent;
      border-color: #ccc; }
      .bg-inverse .btn.btn-warning:hover, .bg-inverse .btn-warning.custom-file-control:hover::before {
        color: #ff5722;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-warning:focus, .bg-inverse .btn-warning.custom-file-control:focus::before, .bg-inverse .btn.btn-warning.focus, .bg-inverse .btn-warning.focus.custom-file-control::before {
        color: #ff5722;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-warning:active, .bg-inverse .btn-warning.custom-file-control:active::before, .bg-inverse .btn.btn-warning.active, .bg-inverse .btn-warning.active.custom-file-control::before,
      .open > .bg-inverse .btn.btn-warning.dropdown-toggle,
      .open > .bg-inverse .btn-warning.dropdown-toggle.custom-file-control::before {
        color: #ff5722;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
        .bg-inverse .btn.btn-warning:active:hover, .bg-inverse .btn-warning.custom-file-control:active:hover::before, .bg-inverse .btn.btn-warning:active:focus, .bg-inverse .btn-warning.custom-file-control:active:focus::before, .bg-inverse .btn.btn-warning:active.focus, .bg-inverse .btn-warning.custom-file-control:active.focus::before, .bg-inverse .btn.btn-warning.active:hover, .bg-inverse .btn-warning.active.custom-file-control:hover::before, .bg-inverse .btn.btn-warning.active:focus, .bg-inverse .btn-warning.active.custom-file-control:focus::before, .bg-inverse .btn.btn-warning.active.focus, .bg-inverse .btn-warning.active.focus.custom-file-control::before,
        .open > .bg-inverse .btn.btn-warning.dropdown-toggle:hover,
        .open > .bg-inverse .btn-warning.dropdown-toggle.custom-file-control:hover::before,
        .open > .bg-inverse .btn.btn-warning.dropdown-toggle:focus,
        .open > .bg-inverse .btn-warning.dropdown-toggle.custom-file-control:focus::before,
        .open > .bg-inverse .btn.btn-warning.dropdown-toggle.focus,
        .open > .bg-inverse .btn-warning.dropdown-toggle.focus.custom-file-control::before {
          color: #ff5722;
          background-color: rgba(204, 204, 204, 0.25);
          border-color: rgba(204, 204, 204, 0.25); }
      .open > .bg-inverse .btn.btn-warning.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .btn-warning.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
        color: inherit;
        background-color: transparent; }
        .open > .bg-inverse .btn.btn-warning.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .btn-warning.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
          background-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-warning.disabled:focus, .bg-inverse .btn-warning.disabled.custom-file-control:focus::before, .bg-inverse .btn.btn-warning.disabled.focus, .bg-inverse .btn-warning.disabled.focus.custom-file-control::before, .bg-inverse .btn.btn-warning:disabled:focus, .bg-inverse .btn-warning.custom-file-control:disabled:focus::before, .bg-inverse .btn.btn-warning:disabled.focus, .bg-inverse .btn-warning.custom-file-control:disabled.focus::before {
        background-color: transparent;
        border-color: #ccc; }
      .bg-inverse .btn.btn-warning.disabled:hover, .bg-inverse .btn-warning.disabled.custom-file-control:hover::before, .bg-inverse .btn.btn-warning:disabled:hover, .bg-inverse .btn-warning.custom-file-control:disabled:hover::before {
        background-color: transparent;
        border-color: #ccc; }
    .btn.btn-warning.btn-link, .btn-warning.btn-link.custom-file-control::before {
      background-color: transparent; }
  .btn.btn-danger, .btn-danger.custom-file-control::before {
    color: #f44336;
    background-color: transparent;
    border-color: #ccc; }
    .btn.btn-danger:hover, .btn-danger.custom-file-control:hover::before {
      color: #f44336;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-danger:focus, .btn-danger.custom-file-control:focus::before, .btn.btn-danger.focus, .btn-danger.focus.custom-file-control::before {
      color: #f44336;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-danger:active, .btn-danger.custom-file-control:active::before, .btn.btn-danger.active, .btn-danger.active.custom-file-control::before,
    .open > .btn.btn-danger.dropdown-toggle,
    .open > .btn-danger.dropdown-toggle.custom-file-control::before {
      color: #f44336;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
      .btn.btn-danger:active:hover, .btn-danger.custom-file-control:active:hover::before, .btn.btn-danger:active:focus, .btn-danger.custom-file-control:active:focus::before, .btn.btn-danger:active.focus, .btn-danger.custom-file-control:active.focus::before, .btn.btn-danger.active:hover, .btn-danger.active.custom-file-control:hover::before, .btn.btn-danger.active:focus, .btn-danger.active.custom-file-control:focus::before, .btn.btn-danger.active.focus, .btn-danger.active.focus.custom-file-control::before,
      .open > .btn.btn-danger.dropdown-toggle:hover,
      .open > .btn-danger.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-danger.dropdown-toggle:focus,
      .open > .btn-danger.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-danger.dropdown-toggle.focus,
      .open > .btn-danger.dropdown-toggle.focus.custom-file-control::before {
        color: #f44336;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: rgba(153, 153, 153, 0.4); }
    .open > .btn.btn-danger.dropdown-toggle.bmd-btn-icon, .open > .btn-danger.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .btn.btn-danger.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-danger.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-danger.disabled:focus, .btn-danger.disabled.custom-file-control:focus::before, .btn.btn-danger.disabled.focus, .btn-danger.disabled.focus.custom-file-control::before, .btn.btn-danger:disabled:focus, .btn-danger.custom-file-control:disabled:focus::before, .btn.btn-danger:disabled.focus, .btn-danger.custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #ccc; }
    .btn.btn-danger.disabled:hover, .btn-danger.disabled.custom-file-control:hover::before, .btn.btn-danger:disabled:hover, .btn-danger.custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #ccc; }
    .bg-inverse .btn.btn-danger, .bg-inverse .btn-danger.custom-file-control::before {
      color: #f44336;
      background-color: transparent;
      border-color: #ccc; }
      .bg-inverse .btn.btn-danger:hover, .bg-inverse .btn-danger.custom-file-control:hover::before {
        color: #f44336;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-danger:focus, .bg-inverse .btn-danger.custom-file-control:focus::before, .bg-inverse .btn.btn-danger.focus, .bg-inverse .btn-danger.focus.custom-file-control::before {
        color: #f44336;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-danger:active, .bg-inverse .btn-danger.custom-file-control:active::before, .bg-inverse .btn.btn-danger.active, .bg-inverse .btn-danger.active.custom-file-control::before,
      .open > .bg-inverse .btn.btn-danger.dropdown-toggle,
      .open > .bg-inverse .btn-danger.dropdown-toggle.custom-file-control::before {
        color: #f44336;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
        .bg-inverse .btn.btn-danger:active:hover, .bg-inverse .btn-danger.custom-file-control:active:hover::before, .bg-inverse .btn.btn-danger:active:focus, .bg-inverse .btn-danger.custom-file-control:active:focus::before, .bg-inverse .btn.btn-danger:active.focus, .bg-inverse .btn-danger.custom-file-control:active.focus::before, .bg-inverse .btn.btn-danger.active:hover, .bg-inverse .btn-danger.active.custom-file-control:hover::before, .bg-inverse .btn.btn-danger.active:focus, .bg-inverse .btn-danger.active.custom-file-control:focus::before, .bg-inverse .btn.btn-danger.active.focus, .bg-inverse .btn-danger.active.focus.custom-file-control::before,
        .open > .bg-inverse .btn.btn-danger.dropdown-toggle:hover,
        .open > .bg-inverse .btn-danger.dropdown-toggle.custom-file-control:hover::before,
        .open > .bg-inverse .btn.btn-danger.dropdown-toggle:focus,
        .open > .bg-inverse .btn-danger.dropdown-toggle.custom-file-control:focus::before,
        .open > .bg-inverse .btn.btn-danger.dropdown-toggle.focus,
        .open > .bg-inverse .btn-danger.dropdown-toggle.focus.custom-file-control::before {
          color: #f44336;
          background-color: rgba(204, 204, 204, 0.25);
          border-color: rgba(204, 204, 204, 0.25); }
      .open > .bg-inverse .btn.btn-danger.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .btn-danger.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
        color: inherit;
        background-color: transparent; }
        .open > .bg-inverse .btn.btn-danger.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .btn-danger.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
          background-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-danger.disabled:focus, .bg-inverse .btn-danger.disabled.custom-file-control:focus::before, .bg-inverse .btn.btn-danger.disabled.focus, .bg-inverse .btn-danger.disabled.focus.custom-file-control::before, .bg-inverse .btn.btn-danger:disabled:focus, .bg-inverse .btn-danger.custom-file-control:disabled:focus::before, .bg-inverse .btn.btn-danger:disabled.focus, .bg-inverse .btn-danger.custom-file-control:disabled.focus::before {
        background-color: transparent;
        border-color: #ccc; }
      .bg-inverse .btn.btn-danger.disabled:hover, .bg-inverse .btn-danger.disabled.custom-file-control:hover::before, .bg-inverse .btn.btn-danger:disabled:hover, .bg-inverse .btn-danger.custom-file-control:disabled:hover::before {
        background-color: transparent;
        border-color: #ccc; }
    .btn.btn-danger.btn-link, .btn-danger.btn-link.custom-file-control::before {
      background-color: transparent; }
  .btn.btn-light, .btn-light.custom-file-control::before {
    color: #f5f5f5;
    background-color: transparent;
    border-color: #ccc; }
    .btn.btn-light:hover, .btn-light.custom-file-control:hover::before {
      color: #f5f5f5;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-light:focus, .btn-light.custom-file-control:focus::before, .btn.btn-light.focus, .btn-light.focus.custom-file-control::before {
      color: #f5f5f5;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-light:active, .btn-light.custom-file-control:active::before, .btn.btn-light.active, .btn-light.active.custom-file-control::before,
    .open > .btn.btn-light.dropdown-toggle,
    .open > .btn-light.dropdown-toggle.custom-file-control::before {
      color: #f5f5f5;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
      .btn.btn-light:active:hover, .btn-light.custom-file-control:active:hover::before, .btn.btn-light:active:focus, .btn-light.custom-file-control:active:focus::before, .btn.btn-light:active.focus, .btn-light.custom-file-control:active.focus::before, .btn.btn-light.active:hover, .btn-light.active.custom-file-control:hover::before, .btn.btn-light.active:focus, .btn-light.active.custom-file-control:focus::before, .btn.btn-light.active.focus, .btn-light.active.focus.custom-file-control::before,
      .open > .btn.btn-light.dropdown-toggle:hover,
      .open > .btn-light.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-light.dropdown-toggle:focus,
      .open > .btn-light.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-light.dropdown-toggle.focus,
      .open > .btn-light.dropdown-toggle.focus.custom-file-control::before {
        color: #f5f5f5;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: rgba(153, 153, 153, 0.4); }
    .open > .btn.btn-light.dropdown-toggle.bmd-btn-icon, .open > .btn-light.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .btn.btn-light.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-light.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-light.disabled:focus, .btn-light.disabled.custom-file-control:focus::before, .btn.btn-light.disabled.focus, .btn-light.disabled.focus.custom-file-control::before, .btn.btn-light:disabled:focus, .btn-light.custom-file-control:disabled:focus::before, .btn.btn-light:disabled.focus, .btn-light.custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #ccc; }
    .btn.btn-light.disabled:hover, .btn-light.disabled.custom-file-control:hover::before, .btn.btn-light:disabled:hover, .btn-light.custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #ccc; }
    .bg-inverse .btn.btn-light, .bg-inverse .btn-light.custom-file-control::before {
      color: #f5f5f5;
      background-color: transparent;
      border-color: #ccc; }
      .bg-inverse .btn.btn-light:hover, .bg-inverse .btn-light.custom-file-control:hover::before {
        color: #f5f5f5;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-light:focus, .bg-inverse .btn-light.custom-file-control:focus::before, .bg-inverse .btn.btn-light.focus, .bg-inverse .btn-light.focus.custom-file-control::before {
        color: #f5f5f5;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-light:active, .bg-inverse .btn-light.custom-file-control:active::before, .bg-inverse .btn.btn-light.active, .bg-inverse .btn-light.active.custom-file-control::before,
      .open > .bg-inverse .btn.btn-light.dropdown-toggle,
      .open > .bg-inverse .btn-light.dropdown-toggle.custom-file-control::before {
        color: #f5f5f5;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
        .bg-inverse .btn.btn-light:active:hover, .bg-inverse .btn-light.custom-file-control:active:hover::before, .bg-inverse .btn.btn-light:active:focus, .bg-inverse .btn-light.custom-file-control:active:focus::before, .bg-inverse .btn.btn-light:active.focus, .bg-inverse .btn-light.custom-file-control:active.focus::before, .bg-inverse .btn.btn-light.active:hover, .bg-inverse .btn-light.active.custom-file-control:hover::before, .bg-inverse .btn.btn-light.active:focus, .bg-inverse .btn-light.active.custom-file-control:focus::before, .bg-inverse .btn.btn-light.active.focus, .bg-inverse .btn-light.active.focus.custom-file-control::before,
        .open > .bg-inverse .btn.btn-light.dropdown-toggle:hover,
        .open > .bg-inverse .btn-light.dropdown-toggle.custom-file-control:hover::before,
        .open > .bg-inverse .btn.btn-light.dropdown-toggle:focus,
        .open > .bg-inverse .btn-light.dropdown-toggle.custom-file-control:focus::before,
        .open > .bg-inverse .btn.btn-light.dropdown-toggle.focus,
        .open > .bg-inverse .btn-light.dropdown-toggle.focus.custom-file-control::before {
          color: #f5f5f5;
          background-color: rgba(204, 204, 204, 0.25);
          border-color: rgba(204, 204, 204, 0.25); }
      .open > .bg-inverse .btn.btn-light.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .btn-light.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
        color: inherit;
        background-color: transparent; }
        .open > .bg-inverse .btn.btn-light.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .btn-light.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
          background-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-light.disabled:focus, .bg-inverse .btn-light.disabled.custom-file-control:focus::before, .bg-inverse .btn.btn-light.disabled.focus, .bg-inverse .btn-light.disabled.focus.custom-file-control::before, .bg-inverse .btn.btn-light:disabled:focus, .bg-inverse .btn-light.custom-file-control:disabled:focus::before, .bg-inverse .btn.btn-light:disabled.focus, .bg-inverse .btn-light.custom-file-control:disabled.focus::before {
        background-color: transparent;
        border-color: #ccc; }
      .bg-inverse .btn.btn-light.disabled:hover, .bg-inverse .btn-light.disabled.custom-file-control:hover::before, .bg-inverse .btn.btn-light:disabled:hover, .bg-inverse .btn-light.custom-file-control:disabled:hover::before {
        background-color: transparent;
        border-color: #ccc; }
    .btn.btn-light.btn-link, .btn-light.btn-link.custom-file-control::before {
      background-color: transparent; }
  .btn.btn-dark, .btn-dark.custom-file-control::before {
    color: #424242;
    background-color: transparent;
    border-color: #ccc; }
    .btn.btn-dark:hover, .btn-dark.custom-file-control:hover::before {
      color: #424242;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-dark:focus, .btn-dark.custom-file-control:focus::before, .btn.btn-dark.focus, .btn-dark.focus.custom-file-control::before {
      color: #424242;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-dark:active, .btn-dark.custom-file-control:active::before, .btn.btn-dark.active, .btn-dark.active.custom-file-control::before,
    .open > .btn.btn-dark.dropdown-toggle,
    .open > .btn-dark.dropdown-toggle.custom-file-control::before {
      color: #424242;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: rgba(153, 153, 153, 0.2); }
      .btn.btn-dark:active:hover, .btn-dark.custom-file-control:active:hover::before, .btn.btn-dark:active:focus, .btn-dark.custom-file-control:active:focus::before, .btn.btn-dark:active.focus, .btn-dark.custom-file-control:active.focus::before, .btn.btn-dark.active:hover, .btn-dark.active.custom-file-control:hover::before, .btn.btn-dark.active:focus, .btn-dark.active.custom-file-control:focus::before, .btn.btn-dark.active.focus, .btn-dark.active.focus.custom-file-control::before,
      .open > .btn.btn-dark.dropdown-toggle:hover,
      .open > .btn-dark.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-dark.dropdown-toggle:focus,
      .open > .btn-dark.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-dark.dropdown-toggle.focus,
      .open > .btn-dark.dropdown-toggle.focus.custom-file-control::before {
        color: #424242;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: rgba(153, 153, 153, 0.4); }
    .open > .btn.btn-dark.dropdown-toggle.bmd-btn-icon, .open > .btn-dark.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .btn.btn-dark.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-dark.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-dark.disabled:focus, .btn-dark.disabled.custom-file-control:focus::before, .btn.btn-dark.disabled.focus, .btn-dark.disabled.focus.custom-file-control::before, .btn.btn-dark:disabled:focus, .btn-dark.custom-file-control:disabled:focus::before, .btn.btn-dark:disabled.focus, .btn-dark.custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #ccc; }
    .btn.btn-dark.disabled:hover, .btn-dark.disabled.custom-file-control:hover::before, .btn.btn-dark:disabled:hover, .btn-dark.custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #ccc; }
    .bg-inverse .btn.btn-dark, .bg-inverse .btn-dark.custom-file-control::before {
      color: #424242;
      background-color: transparent;
      border-color: #ccc; }
      .bg-inverse .btn.btn-dark:hover, .bg-inverse .btn-dark.custom-file-control:hover::before {
        color: #424242;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-dark:focus, .bg-inverse .btn-dark.custom-file-control:focus::before, .bg-inverse .btn.btn-dark.focus, .bg-inverse .btn-dark.focus.custom-file-control::before {
        color: #424242;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-dark:active, .bg-inverse .btn-dark.custom-file-control:active::before, .bg-inverse .btn.btn-dark.active, .bg-inverse .btn-dark.active.custom-file-control::before,
      .open > .bg-inverse .btn.btn-dark.dropdown-toggle,
      .open > .bg-inverse .btn-dark.dropdown-toggle.custom-file-control::before {
        color: #424242;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
        .bg-inverse .btn.btn-dark:active:hover, .bg-inverse .btn-dark.custom-file-control:active:hover::before, .bg-inverse .btn.btn-dark:active:focus, .bg-inverse .btn-dark.custom-file-control:active:focus::before, .bg-inverse .btn.btn-dark:active.focus, .bg-inverse .btn-dark.custom-file-control:active.focus::before, .bg-inverse .btn.btn-dark.active:hover, .bg-inverse .btn-dark.active.custom-file-control:hover::before, .bg-inverse .btn.btn-dark.active:focus, .bg-inverse .btn-dark.active.custom-file-control:focus::before, .bg-inverse .btn.btn-dark.active.focus, .bg-inverse .btn-dark.active.focus.custom-file-control::before,
        .open > .bg-inverse .btn.btn-dark.dropdown-toggle:hover,
        .open > .bg-inverse .btn-dark.dropdown-toggle.custom-file-control:hover::before,
        .open > .bg-inverse .btn.btn-dark.dropdown-toggle:focus,
        .open > .bg-inverse .btn-dark.dropdown-toggle.custom-file-control:focus::before,
        .open > .bg-inverse .btn.btn-dark.dropdown-toggle.focus,
        .open > .bg-inverse .btn-dark.dropdown-toggle.focus.custom-file-control::before {
          color: #424242;
          background-color: rgba(204, 204, 204, 0.25);
          border-color: rgba(204, 204, 204, 0.25); }
      .open > .bg-inverse .btn.btn-dark.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .btn-dark.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
        color: inherit;
        background-color: transparent; }
        .open > .bg-inverse .btn.btn-dark.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .btn-dark.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
          background-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-dark.disabled:focus, .bg-inverse .btn-dark.disabled.custom-file-control:focus::before, .bg-inverse .btn.btn-dark.disabled.focus, .bg-inverse .btn-dark.disabled.focus.custom-file-control::before, .bg-inverse .btn.btn-dark:disabled:focus, .bg-inverse .btn-dark.custom-file-control:disabled:focus::before, .bg-inverse .btn.btn-dark:disabled.focus, .bg-inverse .btn-dark.custom-file-control:disabled.focus::before {
        background-color: transparent;
        border-color: #ccc; }
      .bg-inverse .btn.btn-dark.disabled:hover, .bg-inverse .btn-dark.disabled.custom-file-control:hover::before, .bg-inverse .btn.btn-dark:disabled:hover, .bg-inverse .btn-dark.custom-file-control:disabled:hover::before {
        background-color: transparent;
        border-color: #ccc; }
    .btn.btn-dark.btn-link, .btn-dark.btn-link.custom-file-control::before {
      background-color: transparent; }
  .btn.bmd-btn-fab.btn-primary, .bmd-btn-fab.btn-primary.custom-file-control::before, .btn.btn-raised.btn-primary, .btn-raised.btn-primary.custom-file-control::before,
  .btn-group-raised .btn.btn-primary,
  .btn-group-raised .btn-primary.custom-file-control::before {
    color: #fff;
    background-color: #009688;
    border-color: #009688; }
    .btn.bmd-btn-fab.btn-primary:hover, .bmd-btn-fab.btn-primary.custom-file-control:hover::before, .btn.btn-raised.btn-primary:hover, .btn-raised.btn-primary.custom-file-control:hover::before,
    .btn-group-raised .btn.btn-primary:hover,
    .btn-group-raised .btn-primary.custom-file-control:hover::before {
      color: #fff;
      background-color: #008276;
      border-color: #005951; }
    .btn.bmd-btn-fab.btn-primary:focus, .bmd-btn-fab.btn-primary.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-primary.focus, .bmd-btn-fab.btn-primary.focus.custom-file-control::before, .btn.btn-raised.btn-primary:focus, .btn-raised.btn-primary.custom-file-control:focus::before, .btn.btn-raised.btn-primary.focus, .btn-raised.btn-primary.focus.custom-file-control::before,
    .btn-group-raised .btn.btn-primary:focus,
    .btn-group-raised .btn-primary.custom-file-control:focus::before,
    .btn-group-raised .btn.btn-primary.focus,
    .btn-group-raised .btn-primary.focus.custom-file-control::before {
      color: #fff;
      background-color: #008276;
      border-color: #005951; }
    .btn.bmd-btn-fab.btn-primary:active, .bmd-btn-fab.btn-primary.custom-file-control:active::before, .btn.bmd-btn-fab.btn-primary.active, .bmd-btn-fab.btn-primary.active.custom-file-control::before,
    .open > .btn.bmd-btn-fab.btn-primary.dropdown-toggle,
    .open > .bmd-btn-fab.btn-primary.dropdown-toggle.custom-file-control::before, .btn.btn-raised.btn-primary:active, .btn-raised.btn-primary.custom-file-control:active::before, .btn.btn-raised.btn-primary.active, .btn-raised.btn-primary.active.custom-file-control::before,
    .open > .btn.btn-raised.btn-primary.dropdown-toggle,
    .open > .btn-raised.btn-primary.dropdown-toggle.custom-file-control::before,
    .btn-group-raised .btn.btn-primary:active,
    .btn-group-raised .btn-primary.custom-file-control:active::before,
    .btn-group-raised .btn.btn-primary.active,
    .btn-group-raised .btn-primary.active.custom-file-control::before,
    .open >
    .btn-group-raised .btn.btn-primary.dropdown-toggle,
    .open >
    .btn-group-raised .btn-primary.dropdown-toggle.custom-file-control::before {
      color: #fff;
      background-color: #008276;
      border-color: #005951; }
      .btn.bmd-btn-fab.btn-primary:active:hover, .bmd-btn-fab.btn-primary.custom-file-control:active:hover::before, .btn.bmd-btn-fab.btn-primary:active:focus, .bmd-btn-fab.btn-primary.custom-file-control:active:focus::before, .btn.bmd-btn-fab.btn-primary:active.focus, .bmd-btn-fab.btn-primary.custom-file-control:active.focus::before, .btn.bmd-btn-fab.btn-primary.active:hover, .bmd-btn-fab.btn-primary.active.custom-file-control:hover::before, .btn.bmd-btn-fab.btn-primary.active:focus, .bmd-btn-fab.btn-primary.active.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-primary.active.focus, .bmd-btn-fab.btn-primary.active.focus.custom-file-control::before,
      .open > .btn.bmd-btn-fab.btn-primary.dropdown-toggle:hover,
      .open > .bmd-btn-fab.btn-primary.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.bmd-btn-fab.btn-primary.dropdown-toggle:focus,
      .open > .bmd-btn-fab.btn-primary.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.bmd-btn-fab.btn-primary.dropdown-toggle.focus,
      .open > .bmd-btn-fab.btn-primary.dropdown-toggle.focus.custom-file-control::before, .btn.btn-raised.btn-primary:active:hover, .btn-raised.btn-primary.custom-file-control:active:hover::before, .btn.btn-raised.btn-primary:active:focus, .btn-raised.btn-primary.custom-file-control:active:focus::before, .btn.btn-raised.btn-primary:active.focus, .btn-raised.btn-primary.custom-file-control:active.focus::before, .btn.btn-raised.btn-primary.active:hover, .btn-raised.btn-primary.active.custom-file-control:hover::before, .btn.btn-raised.btn-primary.active:focus, .btn-raised.btn-primary.active.custom-file-control:focus::before, .btn.btn-raised.btn-primary.active.focus, .btn-raised.btn-primary.active.focus.custom-file-control::before,
      .open > .btn.btn-raised.btn-primary.dropdown-toggle:hover,
      .open > .btn-raised.btn-primary.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-raised.btn-primary.dropdown-toggle:focus,
      .open > .btn-raised.btn-primary.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-raised.btn-primary.dropdown-toggle.focus,
      .open > .btn-raised.btn-primary.dropdown-toggle.focus.custom-file-control::before,
      .btn-group-raised .btn.btn-primary:active:hover,
      .btn-group-raised .btn-primary.custom-file-control:active:hover::before,
      .btn-group-raised .btn.btn-primary:active:focus,
      .btn-group-raised .btn-primary.custom-file-control:active:focus::before,
      .btn-group-raised .btn.btn-primary:active.focus,
      .btn-group-raised .btn-primary.custom-file-control:active.focus::before,
      .btn-group-raised .btn.btn-primary.active:hover,
      .btn-group-raised .btn-primary.active.custom-file-control:hover::before,
      .btn-group-raised .btn.btn-primary.active:focus,
      .btn-group-raised .btn-primary.active.custom-file-control:focus::before,
      .btn-group-raised .btn.btn-primary.active.focus,
      .btn-group-raised .btn-primary.active.focus.custom-file-control::before,
      .open >
      .btn-group-raised .btn.btn-primary.dropdown-toggle:hover,
      .open >
      .btn-group-raised .btn-primary.dropdown-toggle.custom-file-control:hover::before,
      .open >
      .btn-group-raised .btn.btn-primary.dropdown-toggle:focus,
      .open >
      .btn-group-raised .btn-primary.dropdown-toggle.custom-file-control:focus::before,
      .open >
      .btn-group-raised .btn.btn-primary.dropdown-toggle.focus,
      .open >
      .btn-group-raised .btn-primary.dropdown-toggle.focus.custom-file-control::before {
        color: #fff;
        background-color: #008276;
        border-color: #001714; }
    .open > .btn.bmd-btn-fab.btn-primary.dropdown-toggle.bmd-btn-icon, .open > .bmd-btn-fab.btn-primary.dropdown-toggle.bmd-btn-icon.custom-file-control::before, .open > .btn.btn-raised.btn-primary.dropdown-toggle.bmd-btn-icon, .open > .btn-raised.btn-primary.dropdown-toggle.bmd-btn-icon.custom-file-control::before, .open >
    .btn-group-raised .btn.btn-primary.dropdown-toggle.bmd-btn-icon, .open >
    .btn-group-raised .btn-primary.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: #009688; }
      .open > .btn.bmd-btn-fab.btn-primary.dropdown-toggle.bmd-btn-icon:hover, .open > .bmd-btn-fab.btn-primary.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before, .open > .btn.btn-raised.btn-primary.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-raised.btn-primary.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before, .open >
      .btn-group-raised .btn.btn-primary.dropdown-toggle.bmd-btn-icon:hover, .open >
      .btn-group-raised .btn-primary.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: #008276; }
    .btn.bmd-btn-fab.btn-primary.disabled:focus, .bmd-btn-fab.btn-primary.disabled.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-primary.disabled.focus, .bmd-btn-fab.btn-primary.disabled.focus.custom-file-control::before, .btn.bmd-btn-fab.btn-primary:disabled:focus, .bmd-btn-fab.btn-primary.custom-file-control:disabled:focus::before, .btn.bmd-btn-fab.btn-primary:disabled.focus, .bmd-btn-fab.btn-primary.custom-file-control:disabled.focus::before, .btn.btn-raised.btn-primary.disabled:focus, .btn-raised.btn-primary.disabled.custom-file-control:focus::before, .btn.btn-raised.btn-primary.disabled.focus, .btn-raised.btn-primary.disabled.focus.custom-file-control::before, .btn.btn-raised.btn-primary:disabled:focus, .btn-raised.btn-primary.custom-file-control:disabled:focus::before, .btn.btn-raised.btn-primary:disabled.focus, .btn-raised.btn-primary.custom-file-control:disabled.focus::before,
    .btn-group-raised .btn.btn-primary.disabled:focus,
    .btn-group-raised .btn-primary.disabled.custom-file-control:focus::before,
    .btn-group-raised .btn.btn-primary.disabled.focus,
    .btn-group-raised .btn-primary.disabled.focus.custom-file-control::before,
    .btn-group-raised .btn.btn-primary:disabled:focus,
    .btn-group-raised .btn-primary.custom-file-control:disabled:focus::before,
    .btn-group-raised .btn.btn-primary:disabled.focus,
    .btn-group-raised .btn-primary.custom-file-control:disabled.focus::before {
      background-color: #009688;
      border-color: #009688; }
    .btn.bmd-btn-fab.btn-primary.disabled:hover, .bmd-btn-fab.btn-primary.disabled.custom-file-control:hover::before, .btn.bmd-btn-fab.btn-primary:disabled:hover, .bmd-btn-fab.btn-primary.custom-file-control:disabled:hover::before, .btn.btn-raised.btn-primary.disabled:hover, .btn-raised.btn-primary.disabled.custom-file-control:hover::before, .btn.btn-raised.btn-primary:disabled:hover, .btn-raised.btn-primary.custom-file-control:disabled:hover::before,
    .btn-group-raised .btn.btn-primary.disabled:hover,
    .btn-group-raised .btn-primary.disabled.custom-file-control:hover::before,
    .btn-group-raised .btn.btn-primary:disabled:hover,
    .btn-group-raised .btn-primary.custom-file-control:disabled:hover::before {
      background-color: #009688;
      border-color: #009688; }
  .btn.bmd-btn-fab.btn-secondary, .bmd-btn-fab.btn-secondary.custom-file-control::before, .btn.btn-raised.btn-secondary, .btn-raised.btn-secondary.custom-file-control::before,
  .btn-group-raised .btn.btn-secondary,
  .btn-group-raised .btn-secondary.custom-file-control::before {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d; }
    .btn.bmd-btn-fab.btn-secondary:hover, .bmd-btn-fab.btn-secondary.custom-file-control:hover::before, .btn.btn-raised.btn-secondary:hover, .btn-raised.btn-secondary.custom-file-control:hover::before,
    .btn-group-raised .btn.btn-secondary:hover,
    .btn-group-raised .btn-secondary.custom-file-control:hover::before {
      color: #fff;
      background-color: #636b72;
      border-color: #50565c; }
    .btn.bmd-btn-fab.btn-secondary:focus, .bmd-btn-fab.btn-secondary.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-secondary.focus, .bmd-btn-fab.btn-secondary.focus.custom-file-control::before, .btn.btn-raised.btn-secondary:focus, .btn-raised.btn-secondary.custom-file-control:focus::before, .btn.btn-raised.btn-secondary.focus, .btn-raised.btn-secondary.focus.custom-file-control::before,
    .btn-group-raised .btn.btn-secondary:focus,
    .btn-group-raised .btn-secondary.custom-file-control:focus::before,
    .btn-group-raised .btn.btn-secondary.focus,
    .btn-group-raised .btn-secondary.focus.custom-file-control::before {
      color: #fff;
      background-color: #636b72;
      border-color: #50565c; }
    .btn.bmd-btn-fab.btn-secondary:active, .bmd-btn-fab.btn-secondary.custom-file-control:active::before, .btn.bmd-btn-fab.btn-secondary.active, .bmd-btn-fab.btn-secondary.active.custom-file-control::before,
    .open > .btn.bmd-btn-fab.btn-secondary.dropdown-toggle,
    .open > .bmd-btn-fab.btn-secondary.dropdown-toggle.custom-file-control::before, .btn.btn-raised.btn-secondary:active, .btn-raised.btn-secondary.custom-file-control:active::before, .btn.btn-raised.btn-secondary.active, .btn-raised.btn-secondary.active.custom-file-control::before,
    .open > .btn.btn-raised.btn-secondary.dropdown-toggle,
    .open > .btn-raised.btn-secondary.dropdown-toggle.custom-file-control::before,
    .btn-group-raised .btn.btn-secondary:active,
    .btn-group-raised .btn-secondary.custom-file-control:active::before,
    .btn-group-raised .btn.btn-secondary.active,
    .btn-group-raised .btn-secondary.active.custom-file-control::before,
    .open >
    .btn-group-raised .btn.btn-secondary.dropdown-toggle,
    .open >
    .btn-group-raised .btn-secondary.dropdown-toggle.custom-file-control::before {
      color: #fff;
      background-color: #636b72;
      border-color: #50565c; }
      .btn.bmd-btn-fab.btn-secondary:active:hover, .bmd-btn-fab.btn-secondary.custom-file-control:active:hover::before, .btn.bmd-btn-fab.btn-secondary:active:focus, .bmd-btn-fab.btn-secondary.custom-file-control:active:focus::before, .btn.bmd-btn-fab.btn-secondary:active.focus, .bmd-btn-fab.btn-secondary.custom-file-control:active.focus::before, .btn.bmd-btn-fab.btn-secondary.active:hover, .bmd-btn-fab.btn-secondary.active.custom-file-control:hover::before, .btn.bmd-btn-fab.btn-secondary.active:focus, .bmd-btn-fab.btn-secondary.active.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-secondary.active.focus, .bmd-btn-fab.btn-secondary.active.focus.custom-file-control::before,
      .open > .btn.bmd-btn-fab.btn-secondary.dropdown-toggle:hover,
      .open > .bmd-btn-fab.btn-secondary.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.bmd-btn-fab.btn-secondary.dropdown-toggle:focus,
      .open > .bmd-btn-fab.btn-secondary.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.bmd-btn-fab.btn-secondary.dropdown-toggle.focus,
      .open > .bmd-btn-fab.btn-secondary.dropdown-toggle.focus.custom-file-control::before, .btn.btn-raised.btn-secondary:active:hover, .btn-raised.btn-secondary.custom-file-control:active:hover::before, .btn.btn-raised.btn-secondary:active:focus, .btn-raised.btn-secondary.custom-file-control:active:focus::before, .btn.btn-raised.btn-secondary:active.focus, .btn-raised.btn-secondary.custom-file-control:active.focus::before, .btn.btn-raised.btn-secondary.active:hover, .btn-raised.btn-secondary.active.custom-file-control:hover::before, .btn.btn-raised.btn-secondary.active:focus, .btn-raised.btn-secondary.active.custom-file-control:focus::before, .btn.btn-raised.btn-secondary.active.focus, .btn-raised.btn-secondary.active.focus.custom-file-control::before,
      .open > .btn.btn-raised.btn-secondary.dropdown-toggle:hover,
      .open > .btn-raised.btn-secondary.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-raised.btn-secondary.dropdown-toggle:focus,
      .open > .btn-raised.btn-secondary.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-raised.btn-secondary.dropdown-toggle.focus,
      .open > .btn-raised.btn-secondary.dropdown-toggle.focus.custom-file-control::before,
      .btn-group-raised .btn.btn-secondary:active:hover,
      .btn-group-raised .btn-secondary.custom-file-control:active:hover::before,
      .btn-group-raised .btn.btn-secondary:active:focus,
      .btn-group-raised .btn-secondary.custom-file-control:active:focus::before,
      .btn-group-raised .btn.btn-secondary:active.focus,
      .btn-group-raised .btn-secondary.custom-file-control:active.focus::before,
      .btn-group-raised .btn.btn-secondary.active:hover,
      .btn-group-raised .btn-secondary.active.custom-file-control:hover::before,
      .btn-group-raised .btn.btn-secondary.active:focus,
      .btn-group-raised .btn-secondary.active.custom-file-control:focus::before,
      .btn-group-raised .btn.btn-secondary.active.focus,
      .btn-group-raised .btn-secondary.active.focus.custom-file-control::before,
      .open >
      .btn-group-raised .btn.btn-secondary.dropdown-toggle:hover,
      .open >
      .btn-group-raised .btn-secondary.dropdown-toggle.custom-file-control:hover::before,
      .open >
      .btn-group-raised .btn.btn-secondary.dropdown-toggle:focus,
      .open >
      .btn-group-raised .btn-secondary.dropdown-toggle.custom-file-control:focus::before,
      .open >
      .btn-group-raised .btn.btn-secondary.dropdown-toggle.focus,
      .open >
      .btn-group-raised .btn-secondary.dropdown-toggle.focus.custom-file-control::before {
        color: #fff;
        background-color: #636b72;
        border-color: #313539; }
    .open > .btn.bmd-btn-fab.btn-secondary.dropdown-toggle.bmd-btn-icon, .open > .bmd-btn-fab.btn-secondary.dropdown-toggle.bmd-btn-icon.custom-file-control::before, .open > .btn.btn-raised.btn-secondary.dropdown-toggle.bmd-btn-icon, .open > .btn-raised.btn-secondary.dropdown-toggle.bmd-btn-icon.custom-file-control::before, .open >
    .btn-group-raised .btn.btn-secondary.dropdown-toggle.bmd-btn-icon, .open >
    .btn-group-raised .btn-secondary.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: #6c757d; }
      .open > .btn.bmd-btn-fab.btn-secondary.dropdown-toggle.bmd-btn-icon:hover, .open > .bmd-btn-fab.btn-secondary.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before, .open > .btn.btn-raised.btn-secondary.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-raised.btn-secondary.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before, .open >
      .btn-group-raised .btn.btn-secondary.dropdown-toggle.bmd-btn-icon:hover, .open >
      .btn-group-raised .btn-secondary.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: #636b72; }
    .btn.bmd-btn-fab.btn-secondary.disabled:focus, .bmd-btn-fab.btn-secondary.disabled.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-secondary.disabled.focus, .bmd-btn-fab.btn-secondary.disabled.focus.custom-file-control::before, .btn.bmd-btn-fab.btn-secondary:disabled:focus, .bmd-btn-fab.btn-secondary.custom-file-control:disabled:focus::before, .btn.bmd-btn-fab.btn-secondary:disabled.focus, .bmd-btn-fab.btn-secondary.custom-file-control:disabled.focus::before, .btn.btn-raised.btn-secondary.disabled:focus, .btn-raised.btn-secondary.disabled.custom-file-control:focus::before, .btn.btn-raised.btn-secondary.disabled.focus, .btn-raised.btn-secondary.disabled.focus.custom-file-control::before, .btn.btn-raised.btn-secondary:disabled:focus, .btn-raised.btn-secondary.custom-file-control:disabled:focus::before, .btn.btn-raised.btn-secondary:disabled.focus, .btn-raised.btn-secondary.custom-file-control:disabled.focus::before,
    .btn-group-raised .btn.btn-secondary.disabled:focus,
    .btn-group-raised .btn-secondary.disabled.custom-file-control:focus::before,
    .btn-group-raised .btn.btn-secondary.disabled.focus,
    .btn-group-raised .btn-secondary.disabled.focus.custom-file-control::before,
    .btn-group-raised .btn.btn-secondary:disabled:focus,
    .btn-group-raised .btn-secondary.custom-file-control:disabled:focus::before,
    .btn-group-raised .btn.btn-secondary:disabled.focus,
    .btn-group-raised .btn-secondary.custom-file-control:disabled.focus::before {
      background-color: #6c757d;
      border-color: #6c757d; }
    .btn.bmd-btn-fab.btn-secondary.disabled:hover, .bmd-btn-fab.btn-secondary.disabled.custom-file-control:hover::before, .btn.bmd-btn-fab.btn-secondary:disabled:hover, .bmd-btn-fab.btn-secondary.custom-file-control:disabled:hover::before, .btn.btn-raised.btn-secondary.disabled:hover, .btn-raised.btn-secondary.disabled.custom-file-control:hover::before, .btn.btn-raised.btn-secondary:disabled:hover, .btn-raised.btn-secondary.custom-file-control:disabled:hover::before,
    .btn-group-raised .btn.btn-secondary.disabled:hover,
    .btn-group-raised .btn-secondary.disabled.custom-file-control:hover::before,
    .btn-group-raised .btn.btn-secondary:disabled:hover,
    .btn-group-raised .btn-secondary.custom-file-control:disabled:hover::before {
      background-color: #6c757d;
      border-color: #6c757d; }
  .btn.bmd-btn-fab.btn-success, .bmd-btn-fab.btn-success.custom-file-control::before, .btn.btn-raised.btn-success, .btn-raised.btn-success.custom-file-control::before,
  .btn-group-raised .btn.btn-success,
  .btn-group-raised .btn-success.custom-file-control::before {
    color: #fff;
    background-color: #4caf50;
    border-color: #4caf50; }
    .btn.bmd-btn-fab.btn-success:hover, .bmd-btn-fab.btn-success.custom-file-control:hover::before, .btn.btn-raised.btn-success:hover, .btn-raised.btn-success.custom-file-control:hover::before,
    .btn-group-raised .btn.btn-success:hover,
    .btn-group-raised .btn-success.custom-file-control:hover::before {
      color: #fff;
      background-color: #46a149;
      border-color: #39843c; }
    .btn.bmd-btn-fab.btn-success:focus, .bmd-btn-fab.btn-success.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-success.focus, .bmd-btn-fab.btn-success.focus.custom-file-control::before, .btn.btn-raised.btn-success:focus, .btn-raised.btn-success.custom-file-control:focus::before, .btn.btn-raised.btn-success.focus, .btn-raised.btn-success.focus.custom-file-control::before,
    .btn-group-raised .btn.btn-success:focus,
    .btn-group-raised .btn-success.custom-file-control:focus::before,
    .btn-group-raised .btn.btn-success.focus,
    .btn-group-raised .btn-success.focus.custom-file-control::before {
      color: #fff;
      background-color: #46a149;
      border-color: #39843c; }
    .btn.bmd-btn-fab.btn-success:active, .bmd-btn-fab.btn-success.custom-file-control:active::before, .btn.bmd-btn-fab.btn-success.active, .bmd-btn-fab.btn-success.active.custom-file-control::before,
    .open > .btn.bmd-btn-fab.btn-success.dropdown-toggle,
    .open > .bmd-btn-fab.btn-success.dropdown-toggle.custom-file-control::before, .btn.btn-raised.btn-success:active, .btn-raised.btn-success.custom-file-control:active::before, .btn.btn-raised.btn-success.active, .btn-raised.btn-success.active.custom-file-control::before,
    .open > .btn.btn-raised.btn-success.dropdown-toggle,
    .open > .btn-raised.btn-success.dropdown-toggle.custom-file-control::before,
    .btn-group-raised .btn.btn-success:active,
    .btn-group-raised .btn-success.custom-file-control:active::before,
    .btn-group-raised .btn.btn-success.active,
    .btn-group-raised .btn-success.active.custom-file-control::before,
    .open >
    .btn-group-raised .btn.btn-success.dropdown-toggle,
    .open >
    .btn-group-raised .btn-success.dropdown-toggle.custom-file-control::before {
      color: #fff;
      background-color: #46a149;
      border-color: #39843c; }
      .btn.bmd-btn-fab.btn-success:active:hover, .bmd-btn-fab.btn-success.custom-file-control:active:hover::before, .btn.bmd-btn-fab.btn-success:active:focus, .bmd-btn-fab.btn-success.custom-file-control:active:focus::before, .btn.bmd-btn-fab.btn-success:active.focus, .bmd-btn-fab.btn-success.custom-file-control:active.focus::before, .btn.bmd-btn-fab.btn-success.active:hover, .bmd-btn-fab.btn-success.active.custom-file-control:hover::before, .btn.bmd-btn-fab.btn-success.active:focus, .bmd-btn-fab.btn-success.active.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-success.active.focus, .bmd-btn-fab.btn-success.active.focus.custom-file-control::before,
      .open > .btn.bmd-btn-fab.btn-success.dropdown-toggle:hover,
      .open > .bmd-btn-fab.btn-success.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.bmd-btn-fab.btn-success.dropdown-toggle:focus,
      .open > .bmd-btn-fab.btn-success.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.bmd-btn-fab.btn-success.dropdown-toggle.focus,
      .open > .bmd-btn-fab.btn-success.dropdown-toggle.focus.custom-file-control::before, .btn.btn-raised.btn-success:active:hover, .btn-raised.btn-success.custom-file-control:active:hover::before, .btn.btn-raised.btn-success:active:focus, .btn-raised.btn-success.custom-file-control:active:focus::before, .btn.btn-raised.btn-success:active.focus, .btn-raised.btn-success.custom-file-control:active.focus::before, .btn.btn-raised.btn-success.active:hover, .btn-raised.btn-success.active.custom-file-control:hover::before, .btn.btn-raised.btn-success.active:focus, .btn-raised.btn-success.active.custom-file-control:focus::before, .btn.btn-raised.btn-success.active.focus, .btn-raised.btn-success.active.focus.custom-file-control::before,
      .open > .btn.btn-raised.btn-success.dropdown-toggle:hover,
      .open > .btn-raised.btn-success.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-raised.btn-success.dropdown-toggle:focus,
      .open > .btn-raised.btn-success.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-raised.btn-success.dropdown-toggle.focus,
      .open > .btn-raised.btn-success.dropdown-toggle.focus.custom-file-control::before,
      .btn-group-raised .btn.btn-success:active:hover,
      .btn-group-raised .btn-success.custom-file-control:active:hover::before,
      .btn-group-raised .btn.btn-success:active:focus,
      .btn-group-raised .btn-success.custom-file-control:active:focus::before,
      .btn-group-raised .btn.btn-success:active.focus,
      .btn-group-raised .btn-success.custom-file-control:active.focus::before,
      .btn-group-raised .btn.btn-success.active:hover,
      .btn-group-raised .btn-success.active.custom-file-control:hover::before,
      .btn-group-raised .btn.btn-success.active:focus,
      .btn-group-raised .btn-success.active.custom-file-control:focus::before,
      .btn-group-raised .btn.btn-success.active.focus,
      .btn-group-raised .btn-success.active.focus.custom-file-control::before,
      .open >
      .btn-group-raised .btn.btn-success.dropdown-toggle:hover,
      .open >
      .btn-group-raised .btn-success.dropdown-toggle.custom-file-control:hover::before,
      .open >
      .btn-group-raised .btn.btn-success.dropdown-toggle:focus,
      .open >
      .btn-group-raised .btn-success.dropdown-toggle.custom-file-control:focus::before,
      .open >
      .btn-group-raised .btn.btn-success.dropdown-toggle.focus,
      .open >
      .btn-group-raised .btn-success.dropdown-toggle.focus.custom-file-control::before {
        color: #fff;
        background-color: #46a149;
        border-color: #255627; }
    .open > .btn.bmd-btn-fab.btn-success.dropdown-toggle.bmd-btn-icon, .open > .bmd-btn-fab.btn-success.dropdown-toggle.bmd-btn-icon.custom-file-control::before, .open > .btn.btn-raised.btn-success.dropdown-toggle.bmd-btn-icon, .open > .btn-raised.btn-success.dropdown-toggle.bmd-btn-icon.custom-file-control::before, .open >
    .btn-group-raised .btn.btn-success.dropdown-toggle.bmd-btn-icon, .open >
    .btn-group-raised .btn-success.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: #4caf50; }
      .open > .btn.bmd-btn-fab.btn-success.dropdown-toggle.bmd-btn-icon:hover, .open > .bmd-btn-fab.btn-success.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before, .open > .btn.btn-raised.btn-success.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-raised.btn-success.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before, .open >
      .btn-group-raised .btn.btn-success.dropdown-toggle.bmd-btn-icon:hover, .open >
      .btn-group-raised .btn-success.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: #46a149; }
    .btn.bmd-btn-fab.btn-success.disabled:focus, .bmd-btn-fab.btn-success.disabled.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-success.disabled.focus, .bmd-btn-fab.btn-success.disabled.focus.custom-file-control::before, .btn.bmd-btn-fab.btn-success:disabled:focus, .bmd-btn-fab.btn-success.custom-file-control:disabled:focus::before, .btn.bmd-btn-fab.btn-success:disabled.focus, .bmd-btn-fab.btn-success.custom-file-control:disabled.focus::before, .btn.btn-raised.btn-success.disabled:focus, .btn-raised.btn-success.disabled.custom-file-control:focus::before, .btn.btn-raised.btn-success.disabled.focus, .btn-raised.btn-success.disabled.focus.custom-file-control::before, .btn.btn-raised.btn-success:disabled:focus, .btn-raised.btn-success.custom-file-control:disabled:focus::before, .btn.btn-raised.btn-success:disabled.focus, .btn-raised.btn-success.custom-file-control:disabled.focus::before,
    .btn-group-raised .btn.btn-success.disabled:focus,
    .btn-group-raised .btn-success.disabled.custom-file-control:focus::before,
    .btn-group-raised .btn.btn-success.disabled.focus,
    .btn-group-raised .btn-success.disabled.focus.custom-file-control::before,
    .btn-group-raised .btn.btn-success:disabled:focus,
    .btn-group-raised .btn-success.custom-file-control:disabled:focus::before,
    .btn-group-raised .btn.btn-success:disabled.focus,
    .btn-group-raised .btn-success.custom-file-control:disabled.focus::before {
      background-color: #4caf50;
      border-color: #4caf50; }
    .btn.bmd-btn-fab.btn-success.disabled:hover, .bmd-btn-fab.btn-success.disabled.custom-file-control:hover::before, .btn.bmd-btn-fab.btn-success:disabled:hover, .bmd-btn-fab.btn-success.custom-file-control:disabled:hover::before, .btn.btn-raised.btn-success.disabled:hover, .btn-raised.btn-success.disabled.custom-file-control:hover::before, .btn.btn-raised.btn-success:disabled:hover, .btn-raised.btn-success.custom-file-control:disabled:hover::before,
    .btn-group-raised .btn.btn-success.disabled:hover,
    .btn-group-raised .btn-success.disabled.custom-file-control:hover::before,
    .btn-group-raised .btn.btn-success:disabled:hover,
    .btn-group-raised .btn-success.custom-file-control:disabled:hover::before {
      background-color: #4caf50;
      border-color: #4caf50; }
  .btn.bmd-btn-fab.btn-info, .bmd-btn-fab.btn-info.custom-file-control::before, .btn.btn-raised.btn-info, .btn-raised.btn-info.custom-file-control::before,
  .btn-group-raised .btn.btn-info,
  .btn-group-raised .btn-info.custom-file-control::before {
    color: #fff;
    background-color: #03a9f4;
    border-color: #03a9f4; }
    .btn.bmd-btn-fab.btn-info:hover, .bmd-btn-fab.btn-info.custom-file-control:hover::before, .btn.btn-raised.btn-info:hover, .btn-raised.btn-info.custom-file-control:hover::before,
    .btn-group-raised .btn.btn-info:hover,
    .btn-group-raised .btn-info.custom-file-control:hover::before {
      color: #fff;
      background-color: #039be0;
      border-color: #027fb8; }
    .btn.bmd-btn-fab.btn-info:focus, .bmd-btn-fab.btn-info.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-info.focus, .bmd-btn-fab.btn-info.focus.custom-file-control::before, .btn.btn-raised.btn-info:focus, .btn-raised.btn-info.custom-file-control:focus::before, .btn.btn-raised.btn-info.focus, .btn-raised.btn-info.focus.custom-file-control::before,
    .btn-group-raised .btn.btn-info:focus,
    .btn-group-raised .btn-info.custom-file-control:focus::before,
    .btn-group-raised .btn.btn-info.focus,
    .btn-group-raised .btn-info.focus.custom-file-control::before {
      color: #fff;
      background-color: #039be0;
      border-color: #027fb8; }
    .btn.bmd-btn-fab.btn-info:active, .bmd-btn-fab.btn-info.custom-file-control:active::before, .btn.bmd-btn-fab.btn-info.active, .bmd-btn-fab.btn-info.active.custom-file-control::before,
    .open > .btn.bmd-btn-fab.btn-info.dropdown-toggle,
    .open > .bmd-btn-fab.btn-info.dropdown-toggle.custom-file-control::before, .btn.btn-raised.btn-info:active, .btn-raised.btn-info.custom-file-control:active::before, .btn.btn-raised.btn-info.active, .btn-raised.btn-info.active.custom-file-control::before,
    .open > .btn.btn-raised.btn-info.dropdown-toggle,
    .open > .btn-raised.btn-info.dropdown-toggle.custom-file-control::before,
    .btn-group-raised .btn.btn-info:active,
    .btn-group-raised .btn-info.custom-file-control:active::before,
    .btn-group-raised .btn.btn-info.active,
    .btn-group-raised .btn-info.active.custom-file-control::before,
    .open >
    .btn-group-raised .btn.btn-info.dropdown-toggle,
    .open >
    .btn-group-raised .btn-info.dropdown-toggle.custom-file-control::before {
      color: #fff;
      background-color: #039be0;
      border-color: #027fb8; }
      .btn.bmd-btn-fab.btn-info:active:hover, .bmd-btn-fab.btn-info.custom-file-control:active:hover::before, .btn.bmd-btn-fab.btn-info:active:focus, .bmd-btn-fab.btn-info.custom-file-control:active:focus::before, .btn.bmd-btn-fab.btn-info:active.focus, .bmd-btn-fab.btn-info.custom-file-control:active.focus::before, .btn.bmd-btn-fab.btn-info.active:hover, .bmd-btn-fab.btn-info.active.custom-file-control:hover::before, .btn.bmd-btn-fab.btn-info.active:focus, .bmd-btn-fab.btn-info.active.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-info.active.focus, .bmd-btn-fab.btn-info.active.focus.custom-file-control::before,
      .open > .btn.bmd-btn-fab.btn-info.dropdown-toggle:hover,
      .open > .bmd-btn-fab.btn-info.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.bmd-btn-fab.btn-info.dropdown-toggle:focus,
      .open > .bmd-btn-fab.btn-info.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.bmd-btn-fab.btn-info.dropdown-toggle.focus,
      .open > .bmd-btn-fab.btn-info.dropdown-toggle.focus.custom-file-control::before, .btn.btn-raised.btn-info:active:hover, .btn-raised.btn-info.custom-file-control:active:hover::before, .btn.btn-raised.btn-info:active:focus, .btn-raised.btn-info.custom-file-control:active:focus::before, .btn.btn-raised.btn-info:active.focus, .btn-raised.btn-info.custom-file-control:active.focus::before, .btn.btn-raised.btn-info.active:hover, .btn-raised.btn-info.active.custom-file-control:hover::before, .btn.btn-raised.btn-info.active:focus, .btn-raised.btn-info.active.custom-file-control:focus::before, .btn.btn-raised.btn-info.active.focus, .btn-raised.btn-info.active.focus.custom-file-control::before,
      .open > .btn.btn-raised.btn-info.dropdown-toggle:hover,
      .open > .btn-raised.btn-info.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-raised.btn-info.dropdown-toggle:focus,
      .open > .btn-raised.btn-info.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-raised.btn-info.dropdown-toggle.focus,
      .open > .btn-raised.btn-info.dropdown-toggle.focus.custom-file-control::before,
      .btn-group-raised .btn.btn-info:active:hover,
      .btn-group-raised .btn-info.custom-file-control:active:hover::before,
      .btn-group-raised .btn.btn-info:active:focus,
      .btn-group-raised .btn-info.custom-file-control:active:focus::before,
      .btn-group-raised .btn.btn-info:active.focus,
      .btn-group-raised .btn-info.custom-file-control:active.focus::before,
      .btn-group-raised .btn.btn-info.active:hover,
      .btn-group-raised .btn-info.active.custom-file-control:hover::before,
      .btn-group-raised .btn.btn-info.active:focus,
      .btn-group-raised .btn-info.active.custom-file-control:focus::before,
      .btn-group-raised .btn.btn-info.active.focus,
      .btn-group-raised .btn-info.active.focus.custom-file-control::before,
      .open >
      .btn-group-raised .btn.btn-info.dropdown-toggle:hover,
      .open >
      .btn-group-raised .btn-info.dropdown-toggle.custom-file-control:hover::before,
      .open >
      .btn-group-raised .btn.btn-info.dropdown-toggle:focus,
      .open >
      .btn-group-raised .btn-info.dropdown-toggle.custom-file-control:focus::before,
      .open >
      .btn-group-raised .btn.btn-info.dropdown-toggle.focus,
      .open >
      .btn-group-raised .btn-info.dropdown-toggle.focus.custom-file-control::before {
        color: #fff;
        background-color: #039be0;
        border-color: #015276; }
    .open > .btn.bmd-btn-fab.btn-info.dropdown-toggle.bmd-btn-icon, .open > .bmd-btn-fab.btn-info.dropdown-toggle.bmd-btn-icon.custom-file-control::before, .open > .btn.btn-raised.btn-info.dropdown-toggle.bmd-btn-icon, .open > .btn-raised.btn-info.dropdown-toggle.bmd-btn-icon.custom-file-control::before, .open >
    .btn-group-raised .btn.btn-info.dropdown-toggle.bmd-btn-icon, .open >
    .btn-group-raised .btn-info.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: #03a9f4; }
      .open > .btn.bmd-btn-fab.btn-info.dropdown-toggle.bmd-btn-icon:hover, .open > .bmd-btn-fab.btn-info.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before, .open > .btn.btn-raised.btn-info.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-raised.btn-info.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before, .open >
      .btn-group-raised .btn.btn-info.dropdown-toggle.bmd-btn-icon:hover, .open >
      .btn-group-raised .btn-info.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: #039be0; }
    .btn.bmd-btn-fab.btn-info.disabled:focus, .bmd-btn-fab.btn-info.disabled.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-info.disabled.focus, .bmd-btn-fab.btn-info.disabled.focus.custom-file-control::before, .btn.bmd-btn-fab.btn-info:disabled:focus, .bmd-btn-fab.btn-info.custom-file-control:disabled:focus::before, .btn.bmd-btn-fab.btn-info:disabled.focus, .bmd-btn-fab.btn-info.custom-file-control:disabled.focus::before, .btn.btn-raised.btn-info.disabled:focus, .btn-raised.btn-info.disabled.custom-file-control:focus::before, .btn.btn-raised.btn-info.disabled.focus, .btn-raised.btn-info.disabled.focus.custom-file-control::before, .btn.btn-raised.btn-info:disabled:focus, .btn-raised.btn-info.custom-file-control:disabled:focus::before, .btn.btn-raised.btn-info:disabled.focus, .btn-raised.btn-info.custom-file-control:disabled.focus::before,
    .btn-group-raised .btn.btn-info.disabled:focus,
    .btn-group-raised .btn-info.disabled.custom-file-control:focus::before,
    .btn-group-raised .btn.btn-info.disabled.focus,
    .btn-group-raised .btn-info.disabled.focus.custom-file-control::before,
    .btn-group-raised .btn.btn-info:disabled:focus,
    .btn-group-raised .btn-info.custom-file-control:disabled:focus::before,
    .btn-group-raised .btn.btn-info:disabled.focus,
    .btn-group-raised .btn-info.custom-file-control:disabled.focus::before {
      background-color: #03a9f4;
      border-color: #03a9f4; }
    .btn.bmd-btn-fab.btn-info.disabled:hover, .bmd-btn-fab.btn-info.disabled.custom-file-control:hover::before, .btn.bmd-btn-fab.btn-info:disabled:hover, .bmd-btn-fab.btn-info.custom-file-control:disabled:hover::before, .btn.btn-raised.btn-info.disabled:hover, .btn-raised.btn-info.disabled.custom-file-control:hover::before, .btn.btn-raised.btn-info:disabled:hover, .btn-raised.btn-info.custom-file-control:disabled:hover::before,
    .btn-group-raised .btn.btn-info.disabled:hover,
    .btn-group-raised .btn-info.disabled.custom-file-control:hover::before,
    .btn-group-raised .btn.btn-info:disabled:hover,
    .btn-group-raised .btn-info.custom-file-control:disabled:hover::before {
      background-color: #03a9f4;
      border-color: #03a9f4; }
  .btn.bmd-btn-fab.btn-warning, .bmd-btn-fab.btn-warning.custom-file-control::before, .btn.btn-raised.btn-warning, .btn-raised.btn-warning.custom-file-control::before,
  .btn-group-raised .btn.btn-warning,
  .btn-group-raised .btn-warning.custom-file-control::before {
    color: #fff;
    background-color: #ff5722;
    border-color: #ff5722; }
    .btn.bmd-btn-fab.btn-warning:hover, .bmd-btn-fab.btn-warning.custom-file-control:hover::before, .btn.btn-raised.btn-warning:hover, .btn-raised.btn-warning.custom-file-control:hover::before,
    .btn-group-raised .btn.btn-warning:hover,
    .btn-group-raised .btn-warning.custom-file-control:hover::before {
      color: #fff;
      background-color: #ff470e;
      border-color: #e43700; }
    .btn.bmd-btn-fab.btn-warning:focus, .bmd-btn-fab.btn-warning.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-warning.focus, .bmd-btn-fab.btn-warning.focus.custom-file-control::before, .btn.btn-raised.btn-warning:focus, .btn-raised.btn-warning.custom-file-control:focus::before, .btn.btn-raised.btn-warning.focus, .btn-raised.btn-warning.focus.custom-file-control::before,
    .btn-group-raised .btn.btn-warning:focus,
    .btn-group-raised .btn-warning.custom-file-control:focus::before,
    .btn-group-raised .btn.btn-warning.focus,
    .btn-group-raised .btn-warning.focus.custom-file-control::before {
      color: #fff;
      background-color: #ff470e;
      border-color: #e43700; }
    .btn.bmd-btn-fab.btn-warning:active, .bmd-btn-fab.btn-warning.custom-file-control:active::before, .btn.bmd-btn-fab.btn-warning.active, .bmd-btn-fab.btn-warning.active.custom-file-control::before,
    .open > .btn.bmd-btn-fab.btn-warning.dropdown-toggle,
    .open > .bmd-btn-fab.btn-warning.dropdown-toggle.custom-file-control::before, .btn.btn-raised.btn-warning:active, .btn-raised.btn-warning.custom-file-control:active::before, .btn.btn-raised.btn-warning.active, .btn-raised.btn-warning.active.custom-file-control::before,
    .open > .btn.btn-raised.btn-warning.dropdown-toggle,
    .open > .btn-raised.btn-warning.dropdown-toggle.custom-file-control::before,
    .btn-group-raised .btn.btn-warning:active,
    .btn-group-raised .btn-warning.custom-file-control:active::before,
    .btn-group-raised .btn.btn-warning.active,
    .btn-group-raised .btn-warning.active.custom-file-control::before,
    .open >
    .btn-group-raised .btn.btn-warning.dropdown-toggle,
    .open >
    .btn-group-raised .btn-warning.dropdown-toggle.custom-file-control::before {
      color: #fff;
      background-color: #ff470e;
      border-color: #e43700; }
      .btn.bmd-btn-fab.btn-warning:active:hover, .bmd-btn-fab.btn-warning.custom-file-control:active:hover::before, .btn.bmd-btn-fab.btn-warning:active:focus, .bmd-btn-fab.btn-warning.custom-file-control:active:focus::before, .btn.bmd-btn-fab.btn-warning:active.focus, .bmd-btn-fab.btn-warning.custom-file-control:active.focus::before, .btn.bmd-btn-fab.btn-warning.active:hover, .bmd-btn-fab.btn-warning.active.custom-file-control:hover::before, .btn.bmd-btn-fab.btn-warning.active:focus, .bmd-btn-fab.btn-warning.active.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-warning.active.focus, .bmd-btn-fab.btn-warning.active.focus.custom-file-control::before,
      .open > .btn.bmd-btn-fab.btn-warning.dropdown-toggle:hover,
      .open > .bmd-btn-fab.btn-warning.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.bmd-btn-fab.btn-warning.dropdown-toggle:focus,
      .open > .bmd-btn-fab.btn-warning.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.bmd-btn-fab.btn-warning.dropdown-toggle.focus,
      .open > .bmd-btn-fab.btn-warning.dropdown-toggle.focus.custom-file-control::before, .btn.btn-raised.btn-warning:active:hover, .btn-raised.btn-warning.custom-file-control:active:hover::before, .btn.btn-raised.btn-warning:active:focus, .btn-raised.btn-warning.custom-file-control:active:focus::before, .btn.btn-raised.btn-warning:active.focus, .btn-raised.btn-warning.custom-file-control:active.focus::before, .btn.btn-raised.btn-warning.active:hover, .btn-raised.btn-warning.active.custom-file-control:hover::before, .btn.btn-raised.btn-warning.active:focus, .btn-raised.btn-warning.active.custom-file-control:focus::before, .btn.btn-raised.btn-warning.active.focus, .btn-raised.btn-warning.active.focus.custom-file-control::before,
      .open > .btn.btn-raised.btn-warning.dropdown-toggle:hover,
      .open > .btn-raised.btn-warning.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-raised.btn-warning.dropdown-toggle:focus,
      .open > .btn-raised.btn-warning.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-raised.btn-warning.dropdown-toggle.focus,
      .open > .btn-raised.btn-warning.dropdown-toggle.focus.custom-file-control::before,
      .btn-group-raised .btn.btn-warning:active:hover,
      .btn-group-raised .btn-warning.custom-file-control:active:hover::before,
      .btn-group-raised .btn.btn-warning:active:focus,
      .btn-group-raised .btn-warning.custom-file-control:active:focus::before,
      .btn-group-raised .btn.btn-warning:active.focus,
      .btn-group-raised .btn-warning.custom-file-control:active.focus::before,
      .btn-group-raised .btn.btn-warning.active:hover,
      .btn-group-raised .btn-warning.active.custom-file-control:hover::before,
      .btn-group-raised .btn.btn-warning.active:focus,
      .btn-group-raised .btn-warning.active.custom-file-control:focus::before,
      .btn-group-raised .btn.btn-warning.active.focus,
      .btn-group-raised .btn-warning.active.focus.custom-file-control::before,
      .open >
      .btn-group-raised .btn.btn-warning.dropdown-toggle:hover,
      .open >
      .btn-group-raised .btn-warning.dropdown-toggle.custom-file-control:hover::before,
      .open >
      .btn-group-raised .btn.btn-warning.dropdown-toggle:focus,
      .open >
      .btn-group-raised .btn-warning.dropdown-toggle.custom-file-control:focus::before,
      .open >
      .btn-group-raised .btn.btn-warning.dropdown-toggle.focus,
      .open >
      .btn-group-raised .btn-warning.dropdown-toggle.focus.custom-file-control::before {
        color: #fff;
        background-color: #ff470e;
        border-color: #a22700; }
    .open > .btn.bmd-btn-fab.btn-warning.dropdown-toggle.bmd-btn-icon, .open > .bmd-btn-fab.btn-warning.dropdown-toggle.bmd-btn-icon.custom-file-control::before, .open > .btn.btn-raised.btn-warning.dropdown-toggle.bmd-btn-icon, .open > .btn-raised.btn-warning.dropdown-toggle.bmd-btn-icon.custom-file-control::before, .open >
    .btn-group-raised .btn.btn-warning.dropdown-toggle.bmd-btn-icon, .open >
    .btn-group-raised .btn-warning.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: #ff5722; }
      .open > .btn.bmd-btn-fab.btn-warning.dropdown-toggle.bmd-btn-icon:hover, .open > .bmd-btn-fab.btn-warning.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before, .open > .btn.btn-raised.btn-warning.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-raised.btn-warning.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before, .open >
      .btn-group-raised .btn.btn-warning.dropdown-toggle.bmd-btn-icon:hover, .open >
      .btn-group-raised .btn-warning.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: #ff470e; }
    .btn.bmd-btn-fab.btn-warning.disabled:focus, .bmd-btn-fab.btn-warning.disabled.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-warning.disabled.focus, .bmd-btn-fab.btn-warning.disabled.focus.custom-file-control::before, .btn.bmd-btn-fab.btn-warning:disabled:focus, .bmd-btn-fab.btn-warning.custom-file-control:disabled:focus::before, .btn.bmd-btn-fab.btn-warning:disabled.focus, .bmd-btn-fab.btn-warning.custom-file-control:disabled.focus::before, .btn.btn-raised.btn-warning.disabled:focus, .btn-raised.btn-warning.disabled.custom-file-control:focus::before, .btn.btn-raised.btn-warning.disabled.focus, .btn-raised.btn-warning.disabled.focus.custom-file-control::before, .btn.btn-raised.btn-warning:disabled:focus, .btn-raised.btn-warning.custom-file-control:disabled:focus::before, .btn.btn-raised.btn-warning:disabled.focus, .btn-raised.btn-warning.custom-file-control:disabled.focus::before,
    .btn-group-raised .btn.btn-warning.disabled:focus,
    .btn-group-raised .btn-warning.disabled.custom-file-control:focus::before,
    .btn-group-raised .btn.btn-warning.disabled.focus,
    .btn-group-raised .btn-warning.disabled.focus.custom-file-control::before,
    .btn-group-raised .btn.btn-warning:disabled:focus,
    .btn-group-raised .btn-warning.custom-file-control:disabled:focus::before,
    .btn-group-raised .btn.btn-warning:disabled.focus,
    .btn-group-raised .btn-warning.custom-file-control:disabled.focus::before {
      background-color: #ff5722;
      border-color: #ff5722; }
    .btn.bmd-btn-fab.btn-warning.disabled:hover, .bmd-btn-fab.btn-warning.disabled.custom-file-control:hover::before, .btn.bmd-btn-fab.btn-warning:disabled:hover, .bmd-btn-fab.btn-warning.custom-file-control:disabled:hover::before, .btn.btn-raised.btn-warning.disabled:hover, .btn-raised.btn-warning.disabled.custom-file-control:hover::before, .btn.btn-raised.btn-warning:disabled:hover, .btn-raised.btn-warning.custom-file-control:disabled:hover::before,
    .btn-group-raised .btn.btn-warning.disabled:hover,
    .btn-group-raised .btn-warning.disabled.custom-file-control:hover::before,
    .btn-group-raised .btn.btn-warning:disabled:hover,
    .btn-group-raised .btn-warning.custom-file-control:disabled:hover::before {
      background-color: #ff5722;
      border-color: #ff5722; }
  .btn.bmd-btn-fab.btn-danger, .bmd-btn-fab.btn-danger.custom-file-control::before, .btn.btn-raised.btn-danger, .btn-raised.btn-danger.custom-file-control::before,
  .btn-group-raised .btn.btn-danger,
  .btn-group-raised .btn-danger.custom-file-control::before {
    color: #fff;
    background-color: #f44336;
    border-color: #f44336; }
    .btn.bmd-btn-fab.btn-danger:hover, .bmd-btn-fab.btn-danger.custom-file-control:hover::before, .btn.btn-raised.btn-danger:hover, .btn-raised.btn-danger.custom-file-control:hover::before,
    .btn-group-raised .btn.btn-danger:hover,
    .btn-group-raised .btn-danger.custom-file-control:hover::before {
      color: #fff;
      background-color: #f55549;
      border-color: #e11b0c; }
    .btn.bmd-btn-fab.btn-danger:focus, .bmd-btn-fab.btn-danger.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-danger.focus, .bmd-btn-fab.btn-danger.focus.custom-file-control::before, .btn.btn-raised.btn-danger:focus, .btn-raised.btn-danger.custom-file-control:focus::before, .btn.btn-raised.btn-danger.focus, .btn-raised.btn-danger.focus.custom-file-control::before,
    .btn-group-raised .btn.btn-danger:focus,
    .btn-group-raised .btn-danger.custom-file-control:focus::before,
    .btn-group-raised .btn.btn-danger.focus,
    .btn-group-raised .btn-danger.focus.custom-file-control::before {
      color: #fff;
      background-color: #f55549;
      border-color: #e11b0c; }
    .btn.bmd-btn-fab.btn-danger:active, .bmd-btn-fab.btn-danger.custom-file-control:active::before, .btn.bmd-btn-fab.btn-danger.active, .bmd-btn-fab.btn-danger.active.custom-file-control::before,
    .open > .btn.bmd-btn-fab.btn-danger.dropdown-toggle,
    .open > .bmd-btn-fab.btn-danger.dropdown-toggle.custom-file-control::before, .btn.btn-raised.btn-danger:active, .btn-raised.btn-danger.custom-file-control:active::before, .btn.btn-raised.btn-danger.active, .btn-raised.btn-danger.active.custom-file-control::before,
    .open > .btn.btn-raised.btn-danger.dropdown-toggle,
    .open > .btn-raised.btn-danger.dropdown-toggle.custom-file-control::before,
    .btn-group-raised .btn.btn-danger:active,
    .btn-group-raised .btn-danger.custom-file-control:active::before,
    .btn-group-raised .btn.btn-danger.active,
    .btn-group-raised .btn-danger.active.custom-file-control::before,
    .open >
    .btn-group-raised .btn.btn-danger.dropdown-toggle,
    .open >
    .btn-group-raised .btn-danger.dropdown-toggle.custom-file-control::before {
      color: #fff;
      background-color: #f55549;
      border-color: #e11b0c; }
      .btn.bmd-btn-fab.btn-danger:active:hover, .bmd-btn-fab.btn-danger.custom-file-control:active:hover::before, .btn.bmd-btn-fab.btn-danger:active:focus, .bmd-btn-fab.btn-danger.custom-file-control:active:focus::before, .btn.bmd-btn-fab.btn-danger:active.focus, .bmd-btn-fab.btn-danger.custom-file-control:active.focus::before, .btn.bmd-btn-fab.btn-danger.active:hover, .bmd-btn-fab.btn-danger.active.custom-file-control:hover::before, .btn.bmd-btn-fab.btn-danger.active:focus, .bmd-btn-fab.btn-danger.active.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-danger.active.focus, .bmd-btn-fab.btn-danger.active.focus.custom-file-control::before,
      .open > .btn.bmd-btn-fab.btn-danger.dropdown-toggle:hover,
      .open > .bmd-btn-fab.btn-danger.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.bmd-btn-fab.btn-danger.dropdown-toggle:focus,
      .open > .bmd-btn-fab.btn-danger.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.bmd-btn-fab.btn-danger.dropdown-toggle.focus,
      .open > .bmd-btn-fab.btn-danger.dropdown-toggle.focus.custom-file-control::before, .btn.btn-raised.btn-danger:active:hover, .btn-raised.btn-danger.custom-file-control:active:hover::before, .btn.btn-raised.btn-danger:active:focus, .btn-raised.btn-danger.custom-file-control:active:focus::before, .btn.btn-raised.btn-danger:active.focus, .btn-raised.btn-danger.custom-file-control:active.focus::before, .btn.btn-raised.btn-danger.active:hover, .btn-raised.btn-danger.active.custom-file-control:hover::before, .btn.btn-raised.btn-danger.active:focus, .btn-raised.btn-danger.active.custom-file-control:focus::before, .btn.btn-raised.btn-danger.active.focus, .btn-raised.btn-danger.active.focus.custom-file-control::before,
      .open > .btn.btn-raised.btn-danger.dropdown-toggle:hover,
      .open > .btn-raised.btn-danger.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-raised.btn-danger.dropdown-toggle:focus,
      .open > .btn-raised.btn-danger.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-raised.btn-danger.dropdown-toggle.focus,
      .open > .btn-raised.btn-danger.dropdown-toggle.focus.custom-file-control::before,
      .btn-group-raised .btn.btn-danger:active:hover,
      .btn-group-raised .btn-danger.custom-file-control:active:hover::before,
      .btn-group-raised .btn.btn-danger:active:focus,
      .btn-group-raised .btn-danger.custom-file-control:active:focus::before,
      .btn-group-raised .btn.btn-danger:active.focus,
      .btn-group-raised .btn-danger.custom-file-control:active.focus::before,
      .btn-group-raised .btn.btn-danger.active:hover,
      .btn-group-raised .btn-danger.active.custom-file-control:hover::before,
      .btn-group-raised .btn.btn-danger.active:focus,
      .btn-group-raised .btn-danger.active.custom-file-control:focus::before,
      .btn-group-raised .btn.btn-danger.active.focus,
      .btn-group-raised .btn-danger.active.focus.custom-file-control::before,
      .open >
      .btn-group-raised .btn.btn-danger.dropdown-toggle:hover,
      .open >
      .btn-group-raised .btn-danger.dropdown-toggle.custom-file-control:hover::before,
      .open >
      .btn-group-raised .btn.btn-danger.dropdown-toggle:focus,
      .open >
      .btn-group-raised .btn-danger.dropdown-toggle.custom-file-control:focus::before,
      .open >
      .btn-group-raised .btn.btn-danger.dropdown-toggle.focus,
      .open >
      .btn-group-raised .btn-danger.dropdown-toggle.focus.custom-file-control::before {
        color: #fff;
        background-color: #f55549;
        border-color: #a21309; }
    .open > .btn.bmd-btn-fab.btn-danger.dropdown-toggle.bmd-btn-icon, .open > .bmd-btn-fab.btn-danger.dropdown-toggle.bmd-btn-icon.custom-file-control::before, .open > .btn.btn-raised.btn-danger.dropdown-toggle.bmd-btn-icon, .open > .btn-raised.btn-danger.dropdown-toggle.bmd-btn-icon.custom-file-control::before, .open >
    .btn-group-raised .btn.btn-danger.dropdown-toggle.bmd-btn-icon, .open >
    .btn-group-raised .btn-danger.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: #f44336; }
      .open > .btn.bmd-btn-fab.btn-danger.dropdown-toggle.bmd-btn-icon:hover, .open > .bmd-btn-fab.btn-danger.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before, .open > .btn.btn-raised.btn-danger.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-raised.btn-danger.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before, .open >
      .btn-group-raised .btn.btn-danger.dropdown-toggle.bmd-btn-icon:hover, .open >
      .btn-group-raised .btn-danger.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: #f55549; }
    .btn.bmd-btn-fab.btn-danger.disabled:focus, .bmd-btn-fab.btn-danger.disabled.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-danger.disabled.focus, .bmd-btn-fab.btn-danger.disabled.focus.custom-file-control::before, .btn.bmd-btn-fab.btn-danger:disabled:focus, .bmd-btn-fab.btn-danger.custom-file-control:disabled:focus::before, .btn.bmd-btn-fab.btn-danger:disabled.focus, .bmd-btn-fab.btn-danger.custom-file-control:disabled.focus::before, .btn.btn-raised.btn-danger.disabled:focus, .btn-raised.btn-danger.disabled.custom-file-control:focus::before, .btn.btn-raised.btn-danger.disabled.focus, .btn-raised.btn-danger.disabled.focus.custom-file-control::before, .btn.btn-raised.btn-danger:disabled:focus, .btn-raised.btn-danger.custom-file-control:disabled:focus::before, .btn.btn-raised.btn-danger:disabled.focus, .btn-raised.btn-danger.custom-file-control:disabled.focus::before,
    .btn-group-raised .btn.btn-danger.disabled:focus,
    .btn-group-raised .btn-danger.disabled.custom-file-control:focus::before,
    .btn-group-raised .btn.btn-danger.disabled.focus,
    .btn-group-raised .btn-danger.disabled.focus.custom-file-control::before,
    .btn-group-raised .btn.btn-danger:disabled:focus,
    .btn-group-raised .btn-danger.custom-file-control:disabled:focus::before,
    .btn-group-raised .btn.btn-danger:disabled.focus,
    .btn-group-raised .btn-danger.custom-file-control:disabled.focus::before {
      background-color: #f44336;
      border-color: #f44336; }
    .btn.bmd-btn-fab.btn-danger.disabled:hover, .bmd-btn-fab.btn-danger.disabled.custom-file-control:hover::before, .btn.bmd-btn-fab.btn-danger:disabled:hover, .bmd-btn-fab.btn-danger.custom-file-control:disabled:hover::before, .btn.btn-raised.btn-danger.disabled:hover, .btn-raised.btn-danger.disabled.custom-file-control:hover::before, .btn.btn-raised.btn-danger:disabled:hover, .btn-raised.btn-danger.custom-file-control:disabled:hover::before,
    .btn-group-raised .btn.btn-danger.disabled:hover,
    .btn-group-raised .btn-danger.disabled.custom-file-control:hover::before,
    .btn-group-raised .btn.btn-danger:disabled:hover,
    .btn-group-raised .btn-danger.custom-file-control:disabled:hover::before {
      background-color: #f44336;
      border-color: #f44336; }
  .btn.bmd-btn-fab.btn-light, .bmd-btn-fab.btn-light.custom-file-control::before, .btn.btn-raised.btn-light, .btn-raised.btn-light.custom-file-control::before,
  .btn-group-raised .btn.btn-light,
  .btn-group-raised .btn-light.custom-file-control::before {
    color: #fff;
    background-color: #f5f5f5;
    border-color: #f5f5f5; }
    .btn.bmd-btn-fab.btn-light:hover, .bmd-btn-fab.btn-light.custom-file-control:hover::before, .btn.btn-raised.btn-light:hover, .btn-raised.btn-light.custom-file-control:hover::before,
    .btn-group-raised .btn.btn-light:hover,
    .btn-group-raised .btn-light.custom-file-control:hover::before {
      color: #fff;
      background-color: #ebebeb;
      border-color: #d6d6d6; }
    .btn.bmd-btn-fab.btn-light:focus, .bmd-btn-fab.btn-light.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-light.focus, .bmd-btn-fab.btn-light.focus.custom-file-control::before, .btn.btn-raised.btn-light:focus, .btn-raised.btn-light.custom-file-control:focus::before, .btn.btn-raised.btn-light.focus, .btn-raised.btn-light.focus.custom-file-control::before,
    .btn-group-raised .btn.btn-light:focus,
    .btn-group-raised .btn-light.custom-file-control:focus::before,
    .btn-group-raised .btn.btn-light.focus,
    .btn-group-raised .btn-light.focus.custom-file-control::before {
      color: #fff;
      background-color: #ebebeb;
      border-color: #d6d6d6; }
    .btn.bmd-btn-fab.btn-light:active, .bmd-btn-fab.btn-light.custom-file-control:active::before, .btn.bmd-btn-fab.btn-light.active, .bmd-btn-fab.btn-light.active.custom-file-control::before,
    .open > .btn.bmd-btn-fab.btn-light.dropdown-toggle,
    .open > .bmd-btn-fab.btn-light.dropdown-toggle.custom-file-control::before, .btn.btn-raised.btn-light:active, .btn-raised.btn-light.custom-file-control:active::before, .btn.btn-raised.btn-light.active, .btn-raised.btn-light.active.custom-file-control::before,
    .open > .btn.btn-raised.btn-light.dropdown-toggle,
    .open > .btn-raised.btn-light.dropdown-toggle.custom-file-control::before,
    .btn-group-raised .btn.btn-light:active,
    .btn-group-raised .btn-light.custom-file-control:active::before,
    .btn-group-raised .btn.btn-light.active,
    .btn-group-raised .btn-light.active.custom-file-control::before,
    .open >
    .btn-group-raised .btn.btn-light.dropdown-toggle,
    .open >
    .btn-group-raised .btn-light.dropdown-toggle.custom-file-control::before {
      color: #fff;
      background-color: #ebebeb;
      border-color: #d6d6d6; }
      .btn.bmd-btn-fab.btn-light:active:hover, .bmd-btn-fab.btn-light.custom-file-control:active:hover::before, .btn.bmd-btn-fab.btn-light:active:focus, .bmd-btn-fab.btn-light.custom-file-control:active:focus::before, .btn.bmd-btn-fab.btn-light:active.focus, .bmd-btn-fab.btn-light.custom-file-control:active.focus::before, .btn.bmd-btn-fab.btn-light.active:hover, .bmd-btn-fab.btn-light.active.custom-file-control:hover::before, .btn.bmd-btn-fab.btn-light.active:focus, .bmd-btn-fab.btn-light.active.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-light.active.focus, .bmd-btn-fab.btn-light.active.focus.custom-file-control::before,
      .open > .btn.bmd-btn-fab.btn-light.dropdown-toggle:hover,
      .open > .bmd-btn-fab.btn-light.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.bmd-btn-fab.btn-light.dropdown-toggle:focus,
      .open > .bmd-btn-fab.btn-light.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.bmd-btn-fab.btn-light.dropdown-toggle.focus,
      .open > .bmd-btn-fab.btn-light.dropdown-toggle.focus.custom-file-control::before, .btn.btn-raised.btn-light:active:hover, .btn-raised.btn-light.custom-file-control:active:hover::before, .btn.btn-raised.btn-light:active:focus, .btn-raised.btn-light.custom-file-control:active:focus::before, .btn.btn-raised.btn-light:active.focus, .btn-raised.btn-light.custom-file-control:active.focus::before, .btn.btn-raised.btn-light.active:hover, .btn-raised.btn-light.active.custom-file-control:hover::before, .btn.btn-raised.btn-light.active:focus, .btn-raised.btn-light.active.custom-file-control:focus::before, .btn.btn-raised.btn-light.active.focus, .btn-raised.btn-light.active.focus.custom-file-control::before,
      .open > .btn.btn-raised.btn-light.dropdown-toggle:hover,
      .open > .btn-raised.btn-light.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-raised.btn-light.dropdown-toggle:focus,
      .open > .btn-raised.btn-light.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-raised.btn-light.dropdown-toggle.focus,
      .open > .btn-raised.btn-light.dropdown-toggle.focus.custom-file-control::before,
      .btn-group-raised .btn.btn-light:active:hover,
      .btn-group-raised .btn-light.custom-file-control:active:hover::before,
      .btn-group-raised .btn.btn-light:active:focus,
      .btn-group-raised .btn-light.custom-file-control:active:focus::before,
      .btn-group-raised .btn.btn-light:active.focus,
      .btn-group-raised .btn-light.custom-file-control:active.focus::before,
      .btn-group-raised .btn.btn-light.active:hover,
      .btn-group-raised .btn-light.active.custom-file-control:hover::before,
      .btn-group-raised .btn.btn-light.active:focus,
      .btn-group-raised .btn-light.active.custom-file-control:focus::before,
      .btn-group-raised .btn.btn-light.active.focus,
      .btn-group-raised .btn-light.active.focus.custom-file-control::before,
      .open >
      .btn-group-raised .btn.btn-light.dropdown-toggle:hover,
      .open >
      .btn-group-raised .btn-light.dropdown-toggle.custom-file-control:hover::before,
      .open >
      .btn-group-raised .btn.btn-light.dropdown-toggle:focus,
      .open >
      .btn-group-raised .btn-light.dropdown-toggle.custom-file-control:focus::before,
      .open >
      .btn-group-raised .btn.btn-light.dropdown-toggle.focus,
      .open >
      .btn-group-raised .btn-light.dropdown-toggle.focus.custom-file-control::before {
        color: #fff;
        background-color: #ebebeb;
        border-color: #b5b5b5; }
    .open > .btn.bmd-btn-fab.btn-light.dropdown-toggle.bmd-btn-icon, .open > .bmd-btn-fab.btn-light.dropdown-toggle.bmd-btn-icon.custom-file-control::before, .open > .btn.btn-raised.btn-light.dropdown-toggle.bmd-btn-icon, .open > .btn-raised.btn-light.dropdown-toggle.bmd-btn-icon.custom-file-control::before, .open >
    .btn-group-raised .btn.btn-light.dropdown-toggle.bmd-btn-icon, .open >
    .btn-group-raised .btn-light.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: #f5f5f5; }
      .open > .btn.bmd-btn-fab.btn-light.dropdown-toggle.bmd-btn-icon:hover, .open > .bmd-btn-fab.btn-light.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before, .open > .btn.btn-raised.btn-light.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-raised.btn-light.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before, .open >
      .btn-group-raised .btn.btn-light.dropdown-toggle.bmd-btn-icon:hover, .open >
      .btn-group-raised .btn-light.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: #ebebeb; }
    .btn.bmd-btn-fab.btn-light.disabled:focus, .bmd-btn-fab.btn-light.disabled.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-light.disabled.focus, .bmd-btn-fab.btn-light.disabled.focus.custom-file-control::before, .btn.bmd-btn-fab.btn-light:disabled:focus, .bmd-btn-fab.btn-light.custom-file-control:disabled:focus::before, .btn.bmd-btn-fab.btn-light:disabled.focus, .bmd-btn-fab.btn-light.custom-file-control:disabled.focus::before, .btn.btn-raised.btn-light.disabled:focus, .btn-raised.btn-light.disabled.custom-file-control:focus::before, .btn.btn-raised.btn-light.disabled.focus, .btn-raised.btn-light.disabled.focus.custom-file-control::before, .btn.btn-raised.btn-light:disabled:focus, .btn-raised.btn-light.custom-file-control:disabled:focus::before, .btn.btn-raised.btn-light:disabled.focus, .btn-raised.btn-light.custom-file-control:disabled.focus::before,
    .btn-group-raised .btn.btn-light.disabled:focus,
    .btn-group-raised .btn-light.disabled.custom-file-control:focus::before,
    .btn-group-raised .btn.btn-light.disabled.focus,
    .btn-group-raised .btn-light.disabled.focus.custom-file-control::before,
    .btn-group-raised .btn.btn-light:disabled:focus,
    .btn-group-raised .btn-light.custom-file-control:disabled:focus::before,
    .btn-group-raised .btn.btn-light:disabled.focus,
    .btn-group-raised .btn-light.custom-file-control:disabled.focus::before {
      background-color: #f5f5f5;
      border-color: #f5f5f5; }
    .btn.bmd-btn-fab.btn-light.disabled:hover, .bmd-btn-fab.btn-light.disabled.custom-file-control:hover::before, .btn.bmd-btn-fab.btn-light:disabled:hover, .bmd-btn-fab.btn-light.custom-file-control:disabled:hover::before, .btn.btn-raised.btn-light.disabled:hover, .btn-raised.btn-light.disabled.custom-file-control:hover::before, .btn.btn-raised.btn-light:disabled:hover, .btn-raised.btn-light.custom-file-control:disabled:hover::before,
    .btn-group-raised .btn.btn-light.disabled:hover,
    .btn-group-raised .btn-light.disabled.custom-file-control:hover::before,
    .btn-group-raised .btn.btn-light:disabled:hover,
    .btn-group-raised .btn-light.custom-file-control:disabled:hover::before {
      background-color: #f5f5f5;
      border-color: #f5f5f5; }
  .btn.bmd-btn-fab.btn-dark, .bmd-btn-fab.btn-dark.custom-file-control::before, .btn.btn-raised.btn-dark, .btn-raised.btn-dark.custom-file-control::before,
  .btn-group-raised .btn.btn-dark,
  .btn-group-raised .btn-dark.custom-file-control::before {
    color: #fff;
    background-color: #424242;
    border-color: #424242; }
    .btn.bmd-btn-fab.btn-dark:hover, .bmd-btn-fab.btn-dark.custom-file-control:hover::before, .btn.btn-raised.btn-dark:hover, .btn-raised.btn-dark.custom-file-control:hover::before,
    .btn-group-raised .btn.btn-dark:hover,
    .btn-group-raised .btn-dark.custom-file-control:hover::before {
      color: #fff;
      background-color: #383838;
      border-color: #232323; }
    .btn.bmd-btn-fab.btn-dark:focus, .bmd-btn-fab.btn-dark.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-dark.focus, .bmd-btn-fab.btn-dark.focus.custom-file-control::before, .btn.btn-raised.btn-dark:focus, .btn-raised.btn-dark.custom-file-control:focus::before, .btn.btn-raised.btn-dark.focus, .btn-raised.btn-dark.focus.custom-file-control::before,
    .btn-group-raised .btn.btn-dark:focus,
    .btn-group-raised .btn-dark.custom-file-control:focus::before,
    .btn-group-raised .btn.btn-dark.focus,
    .btn-group-raised .btn-dark.focus.custom-file-control::before {
      color: #fff;
      background-color: #383838;
      border-color: #232323; }
    .btn.bmd-btn-fab.btn-dark:active, .bmd-btn-fab.btn-dark.custom-file-control:active::before, .btn.bmd-btn-fab.btn-dark.active, .bmd-btn-fab.btn-dark.active.custom-file-control::before,
    .open > .btn.bmd-btn-fab.btn-dark.dropdown-toggle,
    .open > .bmd-btn-fab.btn-dark.dropdown-toggle.custom-file-control::before, .btn.btn-raised.btn-dark:active, .btn-raised.btn-dark.custom-file-control:active::before, .btn.btn-raised.btn-dark.active, .btn-raised.btn-dark.active.custom-file-control::before,
    .open > .btn.btn-raised.btn-dark.dropdown-toggle,
    .open > .btn-raised.btn-dark.dropdown-toggle.custom-file-control::before,
    .btn-group-raised .btn.btn-dark:active,
    .btn-group-raised .btn-dark.custom-file-control:active::before,
    .btn-group-raised .btn.btn-dark.active,
    .btn-group-raised .btn-dark.active.custom-file-control::before,
    .open >
    .btn-group-raised .btn.btn-dark.dropdown-toggle,
    .open >
    .btn-group-raised .btn-dark.dropdown-toggle.custom-file-control::before {
      color: #fff;
      background-color: #383838;
      border-color: #232323; }
      .btn.bmd-btn-fab.btn-dark:active:hover, .bmd-btn-fab.btn-dark.custom-file-control:active:hover::before, .btn.bmd-btn-fab.btn-dark:active:focus, .bmd-btn-fab.btn-dark.custom-file-control:active:focus::before, .btn.bmd-btn-fab.btn-dark:active.focus, .bmd-btn-fab.btn-dark.custom-file-control:active.focus::before, .btn.bmd-btn-fab.btn-dark.active:hover, .bmd-btn-fab.btn-dark.active.custom-file-control:hover::before, .btn.bmd-btn-fab.btn-dark.active:focus, .bmd-btn-fab.btn-dark.active.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-dark.active.focus, .bmd-btn-fab.btn-dark.active.focus.custom-file-control::before,
      .open > .btn.bmd-btn-fab.btn-dark.dropdown-toggle:hover,
      .open > .bmd-btn-fab.btn-dark.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.bmd-btn-fab.btn-dark.dropdown-toggle:focus,
      .open > .bmd-btn-fab.btn-dark.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.bmd-btn-fab.btn-dark.dropdown-toggle.focus,
      .open > .bmd-btn-fab.btn-dark.dropdown-toggle.focus.custom-file-control::before, .btn.btn-raised.btn-dark:active:hover, .btn-raised.btn-dark.custom-file-control:active:hover::before, .btn.btn-raised.btn-dark:active:focus, .btn-raised.btn-dark.custom-file-control:active:focus::before, .btn.btn-raised.btn-dark:active.focus, .btn-raised.btn-dark.custom-file-control:active.focus::before, .btn.btn-raised.btn-dark.active:hover, .btn-raised.btn-dark.active.custom-file-control:hover::before, .btn.btn-raised.btn-dark.active:focus, .btn-raised.btn-dark.active.custom-file-control:focus::before, .btn.btn-raised.btn-dark.active.focus, .btn-raised.btn-dark.active.focus.custom-file-control::before,
      .open > .btn.btn-raised.btn-dark.dropdown-toggle:hover,
      .open > .btn-raised.btn-dark.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-raised.btn-dark.dropdown-toggle:focus,
      .open > .btn-raised.btn-dark.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-raised.btn-dark.dropdown-toggle.focus,
      .open > .btn-raised.btn-dark.dropdown-toggle.focus.custom-file-control::before,
      .btn-group-raised .btn.btn-dark:active:hover,
      .btn-group-raised .btn-dark.custom-file-control:active:hover::before,
      .btn-group-raised .btn.btn-dark:active:focus,
      .btn-group-raised .btn-dark.custom-file-control:active:focus::before,
      .btn-group-raised .btn.btn-dark:active.focus,
      .btn-group-raised .btn-dark.custom-file-control:active.focus::before,
      .btn-group-raised .btn.btn-dark.active:hover,
      .btn-group-raised .btn-dark.active.custom-file-control:hover::before,
      .btn-group-raised .btn.btn-dark.active:focus,
      .btn-group-raised .btn-dark.active.custom-file-control:focus::before,
      .btn-group-raised .btn.btn-dark.active.focus,
      .btn-group-raised .btn-dark.active.focus.custom-file-control::before,
      .open >
      .btn-group-raised .btn.btn-dark.dropdown-toggle:hover,
      .open >
      .btn-group-raised .btn-dark.dropdown-toggle.custom-file-control:hover::before,
      .open >
      .btn-group-raised .btn.btn-dark.dropdown-toggle:focus,
      .open >
      .btn-group-raised .btn-dark.dropdown-toggle.custom-file-control:focus::before,
      .open >
      .btn-group-raised .btn.btn-dark.dropdown-toggle.focus,
      .open >
      .btn-group-raised .btn-dark.dropdown-toggle.focus.custom-file-control::before {
        color: #fff;
        background-color: #383838;
        border-color: #020202; }
    .open > .btn.bmd-btn-fab.btn-dark.dropdown-toggle.bmd-btn-icon, .open > .bmd-btn-fab.btn-dark.dropdown-toggle.bmd-btn-icon.custom-file-control::before, .open > .btn.btn-raised.btn-dark.dropdown-toggle.bmd-btn-icon, .open > .btn-raised.btn-dark.dropdown-toggle.bmd-btn-icon.custom-file-control::before, .open >
    .btn-group-raised .btn.btn-dark.dropdown-toggle.bmd-btn-icon, .open >
    .btn-group-raised .btn-dark.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: #424242; }
      .open > .btn.bmd-btn-fab.btn-dark.dropdown-toggle.bmd-btn-icon:hover, .open > .bmd-btn-fab.btn-dark.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before, .open > .btn.btn-raised.btn-dark.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-raised.btn-dark.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before, .open >
      .btn-group-raised .btn.btn-dark.dropdown-toggle.bmd-btn-icon:hover, .open >
      .btn-group-raised .btn-dark.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: #383838; }
    .btn.bmd-btn-fab.btn-dark.disabled:focus, .bmd-btn-fab.btn-dark.disabled.custom-file-control:focus::before, .btn.bmd-btn-fab.btn-dark.disabled.focus, .bmd-btn-fab.btn-dark.disabled.focus.custom-file-control::before, .btn.bmd-btn-fab.btn-dark:disabled:focus, .bmd-btn-fab.btn-dark.custom-file-control:disabled:focus::before, .btn.bmd-btn-fab.btn-dark:disabled.focus, .bmd-btn-fab.btn-dark.custom-file-control:disabled.focus::before, .btn.btn-raised.btn-dark.disabled:focus, .btn-raised.btn-dark.disabled.custom-file-control:focus::before, .btn.btn-raised.btn-dark.disabled.focus, .btn-raised.btn-dark.disabled.focus.custom-file-control::before, .btn.btn-raised.btn-dark:disabled:focus, .btn-raised.btn-dark.custom-file-control:disabled:focus::before, .btn.btn-raised.btn-dark:disabled.focus, .btn-raised.btn-dark.custom-file-control:disabled.focus::before,
    .btn-group-raised .btn.btn-dark.disabled:focus,
    .btn-group-raised .btn-dark.disabled.custom-file-control:focus::before,
    .btn-group-raised .btn.btn-dark.disabled.focus,
    .btn-group-raised .btn-dark.disabled.focus.custom-file-control::before,
    .btn-group-raised .btn.btn-dark:disabled:focus,
    .btn-group-raised .btn-dark.custom-file-control:disabled:focus::before,
    .btn-group-raised .btn.btn-dark:disabled.focus,
    .btn-group-raised .btn-dark.custom-file-control:disabled.focus::before {
      background-color: #424242;
      border-color: #424242; }
    .btn.bmd-btn-fab.btn-dark.disabled:hover, .bmd-btn-fab.btn-dark.disabled.custom-file-control:hover::before, .btn.bmd-btn-fab.btn-dark:disabled:hover, .bmd-btn-fab.btn-dark.custom-file-control:disabled:hover::before, .btn.btn-raised.btn-dark.disabled:hover, .btn-raised.btn-dark.disabled.custom-file-control:hover::before, .btn.btn-raised.btn-dark:disabled:hover, .btn-raised.btn-dark.custom-file-control:disabled:hover::before,
    .btn-group-raised .btn.btn-dark.disabled:hover,
    .btn-group-raised .btn-dark.disabled.custom-file-control:hover::before,
    .btn-group-raised .btn.btn-dark:disabled:hover,
    .btn-group-raised .btn-dark.custom-file-control:disabled:hover::before {
      background-color: #424242;
      border-color: #424242; }
  .btn.bmd-btn-fab:hover, .bmd-btn-fab.custom-file-control:hover::before, .btn.bmd-btn-fab:focus, .bmd-btn-fab.custom-file-control:focus::before, .btn.btn-raised:hover, .btn-raised.custom-file-control:hover::before, .btn.btn-raised:focus, .btn-raised.custom-file-control:focus::before,
  .btn-group-raised .btn:hover,
  .btn-group-raised .custom-file-control:hover::before,
  .btn-group-raised .btn:focus,
  .btn-group-raised .custom-file-control:focus::before {
    z-index: 1;
    box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.2); }
  .btn.bmd-btn-fab.active, .bmd-btn-fab.active.custom-file-control::before, .btn.bmd-btn-fab:active, .bmd-btn-fab.custom-file-control:active::before, .btn.btn-raised.active, .btn-raised.active.custom-file-control::before, .btn.btn-raised:active, .btn-raised.custom-file-control:active::before,
  .btn-group-raised .btn.active,
  .btn-group-raised .active.custom-file-control::before,
  .btn-group-raised .btn:active,
  .btn-group-raised .custom-file-control:active::before {
    z-index: 1;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.18), 0 8px 16px rgba(0, 0, 0, 0.36); }
  .btn.bmd-btn-fab.focus, .bmd-btn-fab.focus.custom-file-control::before, .btn.bmd-btn-fab:focus, .bmd-btn-fab.custom-file-control:focus::before, .btn.btn-raised.focus, .btn-raised.focus.custom-file-control::before, .btn.btn-raised:focus, .btn-raised.custom-file-control:focus::before,
  .btn-group-raised .btn.focus,
  .btn-group-raised .focus.custom-file-control::before,
  .btn-group-raised .btn:focus,
  .btn-group-raised .custom-file-control:focus::before {
    outline: 0; }
  .btn.btn-raised, .btn-raised.custom-file-control::before,
  .btn-group-raised .btn,
  .btn-group-raised .custom-file-control::before {
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .btn.btn-raised.btn-link, .btn-raised.btn-link.custom-file-control::before,
    .btn-group-raised .btn.btn-link,
    .btn-group-raised .btn-link.custom-file-control::before {
      box-shadow: none; }
      .btn.btn-raised.btn-link.active, .btn-raised.btn-link.active.custom-file-control::before,
      .btn-group-raised .btn.btn-link.active,
      .btn-group-raised .btn-link.active.custom-file-control::before {
        box-shadow: none; }
      .btn.btn-raised.btn-link:hover, .btn-raised.btn-link.custom-file-control:hover::before, .btn.btn-raised.btn-link:focus, .btn-raised.btn-link.custom-file-control:focus::before, .btn.btn-raised.btn-link:active, .btn-raised.btn-link.custom-file-control:active::before,
      .btn-group-raised .btn.btn-link:hover,
      .btn-group-raised .btn-link.custom-file-control:hover::before,
      .btn-group-raised .btn.btn-link:focus,
      .btn-group-raised .btn-link.custom-file-control:focus::before,
      .btn-group-raised .btn.btn-link:active,
      .btn-group-raised .btn-link.custom-file-control:active::before {
        box-shadow: none; }
    fieldset[disabled][disabled] .btn.btn-raised, fieldset[disabled][disabled] .btn-raised.custom-file-control::before, .btn.btn-raised.disabled, .btn-raised.disabled.custom-file-control::before, .btn.btn-raised:disabled, .btn-raised.custom-file-control:disabled::before, .btn.btn-raised[disabled], .btn-raised[disabled].custom-file-control::before, fieldset[disabled][disabled]
    .btn-group-raised .btn, fieldset[disabled][disabled]
    .btn-group-raised .custom-file-control::before,
    .btn-group-raised .btn.disabled,
    .btn-group-raised .disabled.custom-file-control::before,
    .btn-group-raised .btn:disabled,
    .btn-group-raised .custom-file-control:disabled::before,
    .btn-group-raised .btn[disabled],
    .btn-group-raised [disabled].custom-file-control::before {
      box-shadow: none; }
  .btn.btn-outline, .btn-outline.custom-file-control::before {
    border-color: currentColor;
    border-style: solid;
    border-width: 1px; }
  .btn.btn-outline-primary, .btn-outline-primary.custom-file-control::before {
    border-color: currentColor;
    border-style: solid;
    border-width: 1px;
    color: #009688;
    background-color: transparent;
    border-color: #009688; }
    .btn.btn-outline-primary:hover, .btn-outline-primary.custom-file-control:hover::before {
      color: #009688;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #009688; }
    .btn.btn-outline-primary:focus, .btn-outline-primary.custom-file-control:focus::before, .btn.btn-outline-primary.focus, .btn-outline-primary.focus.custom-file-control::before {
      color: #009688;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #009688; }
    .btn.btn-outline-primary:active, .btn-outline-primary.custom-file-control:active::before, .btn.btn-outline-primary.active, .btn-outline-primary.active.custom-file-control::before,
    .open > .btn.btn-outline-primary.dropdown-toggle,
    .open > .btn-outline-primary.dropdown-toggle.custom-file-control::before {
      color: #009688;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #009688; }
      .btn.btn-outline-primary:active:hover, .btn-outline-primary.custom-file-control:active:hover::before, .btn.btn-outline-primary:active:focus, .btn-outline-primary.custom-file-control:active:focus::before, .btn.btn-outline-primary:active.focus, .btn-outline-primary.custom-file-control:active.focus::before, .btn.btn-outline-primary.active:hover, .btn-outline-primary.active.custom-file-control:hover::before, .btn.btn-outline-primary.active:focus, .btn-outline-primary.active.custom-file-control:focus::before, .btn.btn-outline-primary.active.focus, .btn-outline-primary.active.focus.custom-file-control::before,
      .open > .btn.btn-outline-primary.dropdown-toggle:hover,
      .open > .btn-outline-primary.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-outline-primary.dropdown-toggle:focus,
      .open > .btn-outline-primary.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-outline-primary.dropdown-toggle.focus,
      .open > .btn-outline-primary.dropdown-toggle.focus.custom-file-control::before {
        color: #009688;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: #009688; }
    .open > .btn.btn-outline-primary.dropdown-toggle.bmd-btn-icon, .open > .btn-outline-primary.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .btn.btn-outline-primary.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-outline-primary.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-outline-primary.disabled:focus, .btn-outline-primary.disabled.custom-file-control:focus::before, .btn.btn-outline-primary.disabled.focus, .btn-outline-primary.disabled.focus.custom-file-control::before, .btn.btn-outline-primary:disabled:focus, .btn-outline-primary.custom-file-control:disabled:focus::before, .btn.btn-outline-primary:disabled.focus, .btn-outline-primary.custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #009688; }
    .btn.btn-outline-primary.disabled:hover, .btn-outline-primary.disabled.custom-file-control:hover::before, .btn.btn-outline-primary:disabled:hover, .btn-outline-primary.custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #009688; }
    .bg-inverse .btn.btn-outline-primary, .bg-inverse .btn-outline-primary.custom-file-control::before {
      color: #009688;
      background-color: transparent;
      border-color: #009688; }
      .bg-inverse .btn.btn-outline-primary:hover, .bg-inverse .btn-outline-primary.custom-file-control:hover::before {
        color: #009688;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-primary:focus, .bg-inverse .btn-outline-primary.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-primary.focus, .bg-inverse .btn-outline-primary.focus.custom-file-control::before {
        color: #009688;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-primary:active, .bg-inverse .btn-outline-primary.custom-file-control:active::before, .bg-inverse .btn.btn-outline-primary.active, .bg-inverse .btn-outline-primary.active.custom-file-control::before,
      .open > .bg-inverse .btn.btn-outline-primary.dropdown-toggle,
      .open > .bg-inverse .btn-outline-primary.dropdown-toggle.custom-file-control::before {
        color: #009688;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
        .bg-inverse .btn.btn-outline-primary:active:hover, .bg-inverse .btn-outline-primary.custom-file-control:active:hover::before, .bg-inverse .btn.btn-outline-primary:active:focus, .bg-inverse .btn-outline-primary.custom-file-control:active:focus::before, .bg-inverse .btn.btn-outline-primary:active.focus, .bg-inverse .btn-outline-primary.custom-file-control:active.focus::before, .bg-inverse .btn.btn-outline-primary.active:hover, .bg-inverse .btn-outline-primary.active.custom-file-control:hover::before, .bg-inverse .btn.btn-outline-primary.active:focus, .bg-inverse .btn-outline-primary.active.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-primary.active.focus, .bg-inverse .btn-outline-primary.active.focus.custom-file-control::before,
        .open > .bg-inverse .btn.btn-outline-primary.dropdown-toggle:hover,
        .open > .bg-inverse .btn-outline-primary.dropdown-toggle.custom-file-control:hover::before,
        .open > .bg-inverse .btn.btn-outline-primary.dropdown-toggle:focus,
        .open > .bg-inverse .btn-outline-primary.dropdown-toggle.custom-file-control:focus::before,
        .open > .bg-inverse .btn.btn-outline-primary.dropdown-toggle.focus,
        .open > .bg-inverse .btn-outline-primary.dropdown-toggle.focus.custom-file-control::before {
          color: #009688;
          background-color: rgba(204, 204, 204, 0.25);
          border-color: rgba(204, 204, 204, 0.25); }
      .open > .bg-inverse .btn.btn-outline-primary.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .btn-outline-primary.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
        color: inherit;
        background-color: transparent; }
        .open > .bg-inverse .btn.btn-outline-primary.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .btn-outline-primary.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
          background-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-primary.disabled:focus, .bg-inverse .btn-outline-primary.disabled.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-primary.disabled.focus, .bg-inverse .btn-outline-primary.disabled.focus.custom-file-control::before, .bg-inverse .btn.btn-outline-primary:disabled:focus, .bg-inverse .btn-outline-primary.custom-file-control:disabled:focus::before, .bg-inverse .btn.btn-outline-primary:disabled.focus, .bg-inverse .btn-outline-primary.custom-file-control:disabled.focus::before {
        background-color: transparent;
        border-color: #009688; }
      .bg-inverse .btn.btn-outline-primary.disabled:hover, .bg-inverse .btn-outline-primary.disabled.custom-file-control:hover::before, .bg-inverse .btn.btn-outline-primary:disabled:hover, .bg-inverse .btn-outline-primary.custom-file-control:disabled:hover::before {
        background-color: transparent;
        border-color: #009688; }
    .btn.btn-outline-primary.btn-link, .btn-outline-primary.btn-link.custom-file-control::before {
      background-color: transparent; }
  .btn.btn-outline-secondary, .btn-outline-secondary.custom-file-control::before {
    border-color: currentColor;
    border-style: solid;
    border-width: 1px;
    color: #6c757d;
    background-color: transparent;
    border-color: #6c757d; }
    .btn.btn-outline-secondary:hover, .btn-outline-secondary.custom-file-control:hover::before {
      color: #6c757d;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #6c757d; }
    .btn.btn-outline-secondary:focus, .btn-outline-secondary.custom-file-control:focus::before, .btn.btn-outline-secondary.focus, .btn-outline-secondary.focus.custom-file-control::before {
      color: #6c757d;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #6c757d; }
    .btn.btn-outline-secondary:active, .btn-outline-secondary.custom-file-control:active::before, .btn.btn-outline-secondary.active, .btn-outline-secondary.active.custom-file-control::before,
    .open > .btn.btn-outline-secondary.dropdown-toggle,
    .open > .btn-outline-secondary.dropdown-toggle.custom-file-control::before {
      color: #6c757d;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #6c757d; }
      .btn.btn-outline-secondary:active:hover, .btn-outline-secondary.custom-file-control:active:hover::before, .btn.btn-outline-secondary:active:focus, .btn-outline-secondary.custom-file-control:active:focus::before, .btn.btn-outline-secondary:active.focus, .btn-outline-secondary.custom-file-control:active.focus::before, .btn.btn-outline-secondary.active:hover, .btn-outline-secondary.active.custom-file-control:hover::before, .btn.btn-outline-secondary.active:focus, .btn-outline-secondary.active.custom-file-control:focus::before, .btn.btn-outline-secondary.active.focus, .btn-outline-secondary.active.focus.custom-file-control::before,
      .open > .btn.btn-outline-secondary.dropdown-toggle:hover,
      .open > .btn-outline-secondary.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-outline-secondary.dropdown-toggle:focus,
      .open > .btn-outline-secondary.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-outline-secondary.dropdown-toggle.focus,
      .open > .btn-outline-secondary.dropdown-toggle.focus.custom-file-control::before {
        color: #6c757d;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: #6c757d; }
    .open > .btn.btn-outline-secondary.dropdown-toggle.bmd-btn-icon, .open > .btn-outline-secondary.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .btn.btn-outline-secondary.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-outline-secondary.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-outline-secondary.disabled:focus, .btn-outline-secondary.disabled.custom-file-control:focus::before, .btn.btn-outline-secondary.disabled.focus, .btn-outline-secondary.disabled.focus.custom-file-control::before, .btn.btn-outline-secondary:disabled:focus, .btn-outline-secondary.custom-file-control:disabled:focus::before, .btn.btn-outline-secondary:disabled.focus, .btn-outline-secondary.custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #6c757d; }
    .btn.btn-outline-secondary.disabled:hover, .btn-outline-secondary.disabled.custom-file-control:hover::before, .btn.btn-outline-secondary:disabled:hover, .btn-outline-secondary.custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #6c757d; }
    .bg-inverse .btn.btn-outline-secondary, .bg-inverse .btn-outline-secondary.custom-file-control::before {
      color: #6c757d;
      background-color: transparent;
      border-color: #6c757d; }
      .bg-inverse .btn.btn-outline-secondary:hover, .bg-inverse .btn-outline-secondary.custom-file-control:hover::before {
        color: #6c757d;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-secondary:focus, .bg-inverse .btn-outline-secondary.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-secondary.focus, .bg-inverse .btn-outline-secondary.focus.custom-file-control::before {
        color: #6c757d;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-secondary:active, .bg-inverse .btn-outline-secondary.custom-file-control:active::before, .bg-inverse .btn.btn-outline-secondary.active, .bg-inverse .btn-outline-secondary.active.custom-file-control::before,
      .open > .bg-inverse .btn.btn-outline-secondary.dropdown-toggle,
      .open > .bg-inverse .btn-outline-secondary.dropdown-toggle.custom-file-control::before {
        color: #6c757d;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
        .bg-inverse .btn.btn-outline-secondary:active:hover, .bg-inverse .btn-outline-secondary.custom-file-control:active:hover::before, .bg-inverse .btn.btn-outline-secondary:active:focus, .bg-inverse .btn-outline-secondary.custom-file-control:active:focus::before, .bg-inverse .btn.btn-outline-secondary:active.focus, .bg-inverse .btn-outline-secondary.custom-file-control:active.focus::before, .bg-inverse .btn.btn-outline-secondary.active:hover, .bg-inverse .btn-outline-secondary.active.custom-file-control:hover::before, .bg-inverse .btn.btn-outline-secondary.active:focus, .bg-inverse .btn-outline-secondary.active.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-secondary.active.focus, .bg-inverse .btn-outline-secondary.active.focus.custom-file-control::before,
        .open > .bg-inverse .btn.btn-outline-secondary.dropdown-toggle:hover,
        .open > .bg-inverse .btn-outline-secondary.dropdown-toggle.custom-file-control:hover::before,
        .open > .bg-inverse .btn.btn-outline-secondary.dropdown-toggle:focus,
        .open > .bg-inverse .btn-outline-secondary.dropdown-toggle.custom-file-control:focus::before,
        .open > .bg-inverse .btn.btn-outline-secondary.dropdown-toggle.focus,
        .open > .bg-inverse .btn-outline-secondary.dropdown-toggle.focus.custom-file-control::before {
          color: #6c757d;
          background-color: rgba(204, 204, 204, 0.25);
          border-color: rgba(204, 204, 204, 0.25); }
      .open > .bg-inverse .btn.btn-outline-secondary.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .btn-outline-secondary.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
        color: inherit;
        background-color: transparent; }
        .open > .bg-inverse .btn.btn-outline-secondary.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .btn-outline-secondary.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
          background-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-secondary.disabled:focus, .bg-inverse .btn-outline-secondary.disabled.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-secondary.disabled.focus, .bg-inverse .btn-outline-secondary.disabled.focus.custom-file-control::before, .bg-inverse .btn.btn-outline-secondary:disabled:focus, .bg-inverse .btn-outline-secondary.custom-file-control:disabled:focus::before, .bg-inverse .btn.btn-outline-secondary:disabled.focus, .bg-inverse .btn-outline-secondary.custom-file-control:disabled.focus::before {
        background-color: transparent;
        border-color: #6c757d; }
      .bg-inverse .btn.btn-outline-secondary.disabled:hover, .bg-inverse .btn-outline-secondary.disabled.custom-file-control:hover::before, .bg-inverse .btn.btn-outline-secondary:disabled:hover, .bg-inverse .btn-outline-secondary.custom-file-control:disabled:hover::before {
        background-color: transparent;
        border-color: #6c757d; }
    .btn.btn-outline-secondary.btn-link, .btn-outline-secondary.btn-link.custom-file-control::before {
      background-color: transparent; }
  .btn.btn-outline-success, .btn-outline-success.custom-file-control::before {
    border-color: currentColor;
    border-style: solid;
    border-width: 1px;
    color: #4caf50;
    background-color: transparent;
    border-color: #4caf50; }
    .btn.btn-outline-success:hover, .btn-outline-success.custom-file-control:hover::before {
      color: #4caf50;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #4caf50; }
    .btn.btn-outline-success:focus, .btn-outline-success.custom-file-control:focus::before, .btn.btn-outline-success.focus, .btn-outline-success.focus.custom-file-control::before {
      color: #4caf50;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #4caf50; }
    .btn.btn-outline-success:active, .btn-outline-success.custom-file-control:active::before, .btn.btn-outline-success.active, .btn-outline-success.active.custom-file-control::before,
    .open > .btn.btn-outline-success.dropdown-toggle,
    .open > .btn-outline-success.dropdown-toggle.custom-file-control::before {
      color: #4caf50;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #4caf50; }
      .btn.btn-outline-success:active:hover, .btn-outline-success.custom-file-control:active:hover::before, .btn.btn-outline-success:active:focus, .btn-outline-success.custom-file-control:active:focus::before, .btn.btn-outline-success:active.focus, .btn-outline-success.custom-file-control:active.focus::before, .btn.btn-outline-success.active:hover, .btn-outline-success.active.custom-file-control:hover::before, .btn.btn-outline-success.active:focus, .btn-outline-success.active.custom-file-control:focus::before, .btn.btn-outline-success.active.focus, .btn-outline-success.active.focus.custom-file-control::before,
      .open > .btn.btn-outline-success.dropdown-toggle:hover,
      .open > .btn-outline-success.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-outline-success.dropdown-toggle:focus,
      .open > .btn-outline-success.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-outline-success.dropdown-toggle.focus,
      .open > .btn-outline-success.dropdown-toggle.focus.custom-file-control::before {
        color: #4caf50;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: #4caf50; }
    .open > .btn.btn-outline-success.dropdown-toggle.bmd-btn-icon, .open > .btn-outline-success.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .btn.btn-outline-success.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-outline-success.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-outline-success.disabled:focus, .btn-outline-success.disabled.custom-file-control:focus::before, .btn.btn-outline-success.disabled.focus, .btn-outline-success.disabled.focus.custom-file-control::before, .btn.btn-outline-success:disabled:focus, .btn-outline-success.custom-file-control:disabled:focus::before, .btn.btn-outline-success:disabled.focus, .btn-outline-success.custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #4caf50; }
    .btn.btn-outline-success.disabled:hover, .btn-outline-success.disabled.custom-file-control:hover::before, .btn.btn-outline-success:disabled:hover, .btn-outline-success.custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #4caf50; }
    .bg-inverse .btn.btn-outline-success, .bg-inverse .btn-outline-success.custom-file-control::before {
      color: #4caf50;
      background-color: transparent;
      border-color: #4caf50; }
      .bg-inverse .btn.btn-outline-success:hover, .bg-inverse .btn-outline-success.custom-file-control:hover::before {
        color: #4caf50;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-success:focus, .bg-inverse .btn-outline-success.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-success.focus, .bg-inverse .btn-outline-success.focus.custom-file-control::before {
        color: #4caf50;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-success:active, .bg-inverse .btn-outline-success.custom-file-control:active::before, .bg-inverse .btn.btn-outline-success.active, .bg-inverse .btn-outline-success.active.custom-file-control::before,
      .open > .bg-inverse .btn.btn-outline-success.dropdown-toggle,
      .open > .bg-inverse .btn-outline-success.dropdown-toggle.custom-file-control::before {
        color: #4caf50;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
        .bg-inverse .btn.btn-outline-success:active:hover, .bg-inverse .btn-outline-success.custom-file-control:active:hover::before, .bg-inverse .btn.btn-outline-success:active:focus, .bg-inverse .btn-outline-success.custom-file-control:active:focus::before, .bg-inverse .btn.btn-outline-success:active.focus, .bg-inverse .btn-outline-success.custom-file-control:active.focus::before, .bg-inverse .btn.btn-outline-success.active:hover, .bg-inverse .btn-outline-success.active.custom-file-control:hover::before, .bg-inverse .btn.btn-outline-success.active:focus, .bg-inverse .btn-outline-success.active.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-success.active.focus, .bg-inverse .btn-outline-success.active.focus.custom-file-control::before,
        .open > .bg-inverse .btn.btn-outline-success.dropdown-toggle:hover,
        .open > .bg-inverse .btn-outline-success.dropdown-toggle.custom-file-control:hover::before,
        .open > .bg-inverse .btn.btn-outline-success.dropdown-toggle:focus,
        .open > .bg-inverse .btn-outline-success.dropdown-toggle.custom-file-control:focus::before,
        .open > .bg-inverse .btn.btn-outline-success.dropdown-toggle.focus,
        .open > .bg-inverse .btn-outline-success.dropdown-toggle.focus.custom-file-control::before {
          color: #4caf50;
          background-color: rgba(204, 204, 204, 0.25);
          border-color: rgba(204, 204, 204, 0.25); }
      .open > .bg-inverse .btn.btn-outline-success.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .btn-outline-success.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
        color: inherit;
        background-color: transparent; }
        .open > .bg-inverse .btn.btn-outline-success.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .btn-outline-success.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
          background-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-success.disabled:focus, .bg-inverse .btn-outline-success.disabled.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-success.disabled.focus, .bg-inverse .btn-outline-success.disabled.focus.custom-file-control::before, .bg-inverse .btn.btn-outline-success:disabled:focus, .bg-inverse .btn-outline-success.custom-file-control:disabled:focus::before, .bg-inverse .btn.btn-outline-success:disabled.focus, .bg-inverse .btn-outline-success.custom-file-control:disabled.focus::before {
        background-color: transparent;
        border-color: #4caf50; }
      .bg-inverse .btn.btn-outline-success.disabled:hover, .bg-inverse .btn-outline-success.disabled.custom-file-control:hover::before, .bg-inverse .btn.btn-outline-success:disabled:hover, .bg-inverse .btn-outline-success.custom-file-control:disabled:hover::before {
        background-color: transparent;
        border-color: #4caf50; }
    .btn.btn-outline-success.btn-link, .btn-outline-success.btn-link.custom-file-control::before {
      background-color: transparent; }
  .btn.btn-outline-info, .btn-outline-info.custom-file-control::before {
    border-color: currentColor;
    border-style: solid;
    border-width: 1px;
    color: #03a9f4;
    background-color: transparent;
    border-color: #03a9f4; }
    .btn.btn-outline-info:hover, .btn-outline-info.custom-file-control:hover::before {
      color: #03a9f4;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #03a9f4; }
    .btn.btn-outline-info:focus, .btn-outline-info.custom-file-control:focus::before, .btn.btn-outline-info.focus, .btn-outline-info.focus.custom-file-control::before {
      color: #03a9f4;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #03a9f4; }
    .btn.btn-outline-info:active, .btn-outline-info.custom-file-control:active::before, .btn.btn-outline-info.active, .btn-outline-info.active.custom-file-control::before,
    .open > .btn.btn-outline-info.dropdown-toggle,
    .open > .btn-outline-info.dropdown-toggle.custom-file-control::before {
      color: #03a9f4;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #03a9f4; }
      .btn.btn-outline-info:active:hover, .btn-outline-info.custom-file-control:active:hover::before, .btn.btn-outline-info:active:focus, .btn-outline-info.custom-file-control:active:focus::before, .btn.btn-outline-info:active.focus, .btn-outline-info.custom-file-control:active.focus::before, .btn.btn-outline-info.active:hover, .btn-outline-info.active.custom-file-control:hover::before, .btn.btn-outline-info.active:focus, .btn-outline-info.active.custom-file-control:focus::before, .btn.btn-outline-info.active.focus, .btn-outline-info.active.focus.custom-file-control::before,
      .open > .btn.btn-outline-info.dropdown-toggle:hover,
      .open > .btn-outline-info.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-outline-info.dropdown-toggle:focus,
      .open > .btn-outline-info.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-outline-info.dropdown-toggle.focus,
      .open > .btn-outline-info.dropdown-toggle.focus.custom-file-control::before {
        color: #03a9f4;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: #03a9f4; }
    .open > .btn.btn-outline-info.dropdown-toggle.bmd-btn-icon, .open > .btn-outline-info.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .btn.btn-outline-info.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-outline-info.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-outline-info.disabled:focus, .btn-outline-info.disabled.custom-file-control:focus::before, .btn.btn-outline-info.disabled.focus, .btn-outline-info.disabled.focus.custom-file-control::before, .btn.btn-outline-info:disabled:focus, .btn-outline-info.custom-file-control:disabled:focus::before, .btn.btn-outline-info:disabled.focus, .btn-outline-info.custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #03a9f4; }
    .btn.btn-outline-info.disabled:hover, .btn-outline-info.disabled.custom-file-control:hover::before, .btn.btn-outline-info:disabled:hover, .btn-outline-info.custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #03a9f4; }
    .bg-inverse .btn.btn-outline-info, .bg-inverse .btn-outline-info.custom-file-control::before {
      color: #03a9f4;
      background-color: transparent;
      border-color: #03a9f4; }
      .bg-inverse .btn.btn-outline-info:hover, .bg-inverse .btn-outline-info.custom-file-control:hover::before {
        color: #03a9f4;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-info:focus, .bg-inverse .btn-outline-info.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-info.focus, .bg-inverse .btn-outline-info.focus.custom-file-control::before {
        color: #03a9f4;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-info:active, .bg-inverse .btn-outline-info.custom-file-control:active::before, .bg-inverse .btn.btn-outline-info.active, .bg-inverse .btn-outline-info.active.custom-file-control::before,
      .open > .bg-inverse .btn.btn-outline-info.dropdown-toggle,
      .open > .bg-inverse .btn-outline-info.dropdown-toggle.custom-file-control::before {
        color: #03a9f4;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
        .bg-inverse .btn.btn-outline-info:active:hover, .bg-inverse .btn-outline-info.custom-file-control:active:hover::before, .bg-inverse .btn.btn-outline-info:active:focus, .bg-inverse .btn-outline-info.custom-file-control:active:focus::before, .bg-inverse .btn.btn-outline-info:active.focus, .bg-inverse .btn-outline-info.custom-file-control:active.focus::before, .bg-inverse .btn.btn-outline-info.active:hover, .bg-inverse .btn-outline-info.active.custom-file-control:hover::before, .bg-inverse .btn.btn-outline-info.active:focus, .bg-inverse .btn-outline-info.active.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-info.active.focus, .bg-inverse .btn-outline-info.active.focus.custom-file-control::before,
        .open > .bg-inverse .btn.btn-outline-info.dropdown-toggle:hover,
        .open > .bg-inverse .btn-outline-info.dropdown-toggle.custom-file-control:hover::before,
        .open > .bg-inverse .btn.btn-outline-info.dropdown-toggle:focus,
        .open > .bg-inverse .btn-outline-info.dropdown-toggle.custom-file-control:focus::before,
        .open > .bg-inverse .btn.btn-outline-info.dropdown-toggle.focus,
        .open > .bg-inverse .btn-outline-info.dropdown-toggle.focus.custom-file-control::before {
          color: #03a9f4;
          background-color: rgba(204, 204, 204, 0.25);
          border-color: rgba(204, 204, 204, 0.25); }
      .open > .bg-inverse .btn.btn-outline-info.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .btn-outline-info.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
        color: inherit;
        background-color: transparent; }
        .open > .bg-inverse .btn.btn-outline-info.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .btn-outline-info.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
          background-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-info.disabled:focus, .bg-inverse .btn-outline-info.disabled.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-info.disabled.focus, .bg-inverse .btn-outline-info.disabled.focus.custom-file-control::before, .bg-inverse .btn.btn-outline-info:disabled:focus, .bg-inverse .btn-outline-info.custom-file-control:disabled:focus::before, .bg-inverse .btn.btn-outline-info:disabled.focus, .bg-inverse .btn-outline-info.custom-file-control:disabled.focus::before {
        background-color: transparent;
        border-color: #03a9f4; }
      .bg-inverse .btn.btn-outline-info.disabled:hover, .bg-inverse .btn-outline-info.disabled.custom-file-control:hover::before, .bg-inverse .btn.btn-outline-info:disabled:hover, .bg-inverse .btn-outline-info.custom-file-control:disabled:hover::before {
        background-color: transparent;
        border-color: #03a9f4; }
    .btn.btn-outline-info.btn-link, .btn-outline-info.btn-link.custom-file-control::before {
      background-color: transparent; }
  .btn.btn-outline-warning, .btn-outline-warning.custom-file-control::before {
    border-color: currentColor;
    border-style: solid;
    border-width: 1px;
    color: #ff5722;
    background-color: transparent;
    border-color: #ff5722; }
    .btn.btn-outline-warning:hover, .btn-outline-warning.custom-file-control:hover::before {
      color: #ff5722;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #ff5722; }
    .btn.btn-outline-warning:focus, .btn-outline-warning.custom-file-control:focus::before, .btn.btn-outline-warning.focus, .btn-outline-warning.focus.custom-file-control::before {
      color: #ff5722;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #ff5722; }
    .btn.btn-outline-warning:active, .btn-outline-warning.custom-file-control:active::before, .btn.btn-outline-warning.active, .btn-outline-warning.active.custom-file-control::before,
    .open > .btn.btn-outline-warning.dropdown-toggle,
    .open > .btn-outline-warning.dropdown-toggle.custom-file-control::before {
      color: #ff5722;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #ff5722; }
      .btn.btn-outline-warning:active:hover, .btn-outline-warning.custom-file-control:active:hover::before, .btn.btn-outline-warning:active:focus, .btn-outline-warning.custom-file-control:active:focus::before, .btn.btn-outline-warning:active.focus, .btn-outline-warning.custom-file-control:active.focus::before, .btn.btn-outline-warning.active:hover, .btn-outline-warning.active.custom-file-control:hover::before, .btn.btn-outline-warning.active:focus, .btn-outline-warning.active.custom-file-control:focus::before, .btn.btn-outline-warning.active.focus, .btn-outline-warning.active.focus.custom-file-control::before,
      .open > .btn.btn-outline-warning.dropdown-toggle:hover,
      .open > .btn-outline-warning.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-outline-warning.dropdown-toggle:focus,
      .open > .btn-outline-warning.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-outline-warning.dropdown-toggle.focus,
      .open > .btn-outline-warning.dropdown-toggle.focus.custom-file-control::before {
        color: #ff5722;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: #ff5722; }
    .open > .btn.btn-outline-warning.dropdown-toggle.bmd-btn-icon, .open > .btn-outline-warning.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .btn.btn-outline-warning.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-outline-warning.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-outline-warning.disabled:focus, .btn-outline-warning.disabled.custom-file-control:focus::before, .btn.btn-outline-warning.disabled.focus, .btn-outline-warning.disabled.focus.custom-file-control::before, .btn.btn-outline-warning:disabled:focus, .btn-outline-warning.custom-file-control:disabled:focus::before, .btn.btn-outline-warning:disabled.focus, .btn-outline-warning.custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #ff5722; }
    .btn.btn-outline-warning.disabled:hover, .btn-outline-warning.disabled.custom-file-control:hover::before, .btn.btn-outline-warning:disabled:hover, .btn-outline-warning.custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #ff5722; }
    .bg-inverse .btn.btn-outline-warning, .bg-inverse .btn-outline-warning.custom-file-control::before {
      color: #ff5722;
      background-color: transparent;
      border-color: #ff5722; }
      .bg-inverse .btn.btn-outline-warning:hover, .bg-inverse .btn-outline-warning.custom-file-control:hover::before {
        color: #ff5722;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-warning:focus, .bg-inverse .btn-outline-warning.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-warning.focus, .bg-inverse .btn-outline-warning.focus.custom-file-control::before {
        color: #ff5722;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-warning:active, .bg-inverse .btn-outline-warning.custom-file-control:active::before, .bg-inverse .btn.btn-outline-warning.active, .bg-inverse .btn-outline-warning.active.custom-file-control::before,
      .open > .bg-inverse .btn.btn-outline-warning.dropdown-toggle,
      .open > .bg-inverse .btn-outline-warning.dropdown-toggle.custom-file-control::before {
        color: #ff5722;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
        .bg-inverse .btn.btn-outline-warning:active:hover, .bg-inverse .btn-outline-warning.custom-file-control:active:hover::before, .bg-inverse .btn.btn-outline-warning:active:focus, .bg-inverse .btn-outline-warning.custom-file-control:active:focus::before, .bg-inverse .btn.btn-outline-warning:active.focus, .bg-inverse .btn-outline-warning.custom-file-control:active.focus::before, .bg-inverse .btn.btn-outline-warning.active:hover, .bg-inverse .btn-outline-warning.active.custom-file-control:hover::before, .bg-inverse .btn.btn-outline-warning.active:focus, .bg-inverse .btn-outline-warning.active.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-warning.active.focus, .bg-inverse .btn-outline-warning.active.focus.custom-file-control::before,
        .open > .bg-inverse .btn.btn-outline-warning.dropdown-toggle:hover,
        .open > .bg-inverse .btn-outline-warning.dropdown-toggle.custom-file-control:hover::before,
        .open > .bg-inverse .btn.btn-outline-warning.dropdown-toggle:focus,
        .open > .bg-inverse .btn-outline-warning.dropdown-toggle.custom-file-control:focus::before,
        .open > .bg-inverse .btn.btn-outline-warning.dropdown-toggle.focus,
        .open > .bg-inverse .btn-outline-warning.dropdown-toggle.focus.custom-file-control::before {
          color: #ff5722;
          background-color: rgba(204, 204, 204, 0.25);
          border-color: rgba(204, 204, 204, 0.25); }
      .open > .bg-inverse .btn.btn-outline-warning.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .btn-outline-warning.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
        color: inherit;
        background-color: transparent; }
        .open > .bg-inverse .btn.btn-outline-warning.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .btn-outline-warning.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
          background-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-warning.disabled:focus, .bg-inverse .btn-outline-warning.disabled.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-warning.disabled.focus, .bg-inverse .btn-outline-warning.disabled.focus.custom-file-control::before, .bg-inverse .btn.btn-outline-warning:disabled:focus, .bg-inverse .btn-outline-warning.custom-file-control:disabled:focus::before, .bg-inverse .btn.btn-outline-warning:disabled.focus, .bg-inverse .btn-outline-warning.custom-file-control:disabled.focus::before {
        background-color: transparent;
        border-color: #ff5722; }
      .bg-inverse .btn.btn-outline-warning.disabled:hover, .bg-inverse .btn-outline-warning.disabled.custom-file-control:hover::before, .bg-inverse .btn.btn-outline-warning:disabled:hover, .bg-inverse .btn-outline-warning.custom-file-control:disabled:hover::before {
        background-color: transparent;
        border-color: #ff5722; }
    .btn.btn-outline-warning.btn-link, .btn-outline-warning.btn-link.custom-file-control::before {
      background-color: transparent; }
  .btn.btn-outline-danger, .btn-outline-danger.custom-file-control::before {
    border-color: currentColor;
    border-style: solid;
    border-width: 1px;
    color: #f44336;
    background-color: transparent;
    border-color: #f44336; }
    .btn.btn-outline-danger:hover, .btn-outline-danger.custom-file-control:hover::before {
      color: #f44336;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #f44336; }
    .btn.btn-outline-danger:focus, .btn-outline-danger.custom-file-control:focus::before, .btn.btn-outline-danger.focus, .btn-outline-danger.focus.custom-file-control::before {
      color: #f44336;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #f44336; }
    .btn.btn-outline-danger:active, .btn-outline-danger.custom-file-control:active::before, .btn.btn-outline-danger.active, .btn-outline-danger.active.custom-file-control::before,
    .open > .btn.btn-outline-danger.dropdown-toggle,
    .open > .btn-outline-danger.dropdown-toggle.custom-file-control::before {
      color: #f44336;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #f44336; }
      .btn.btn-outline-danger:active:hover, .btn-outline-danger.custom-file-control:active:hover::before, .btn.btn-outline-danger:active:focus, .btn-outline-danger.custom-file-control:active:focus::before, .btn.btn-outline-danger:active.focus, .btn-outline-danger.custom-file-control:active.focus::before, .btn.btn-outline-danger.active:hover, .btn-outline-danger.active.custom-file-control:hover::before, .btn.btn-outline-danger.active:focus, .btn-outline-danger.active.custom-file-control:focus::before, .btn.btn-outline-danger.active.focus, .btn-outline-danger.active.focus.custom-file-control::before,
      .open > .btn.btn-outline-danger.dropdown-toggle:hover,
      .open > .btn-outline-danger.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-outline-danger.dropdown-toggle:focus,
      .open > .btn-outline-danger.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-outline-danger.dropdown-toggle.focus,
      .open > .btn-outline-danger.dropdown-toggle.focus.custom-file-control::before {
        color: #f44336;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: #f44336; }
    .open > .btn.btn-outline-danger.dropdown-toggle.bmd-btn-icon, .open > .btn-outline-danger.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .btn.btn-outline-danger.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-outline-danger.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-outline-danger.disabled:focus, .btn-outline-danger.disabled.custom-file-control:focus::before, .btn.btn-outline-danger.disabled.focus, .btn-outline-danger.disabled.focus.custom-file-control::before, .btn.btn-outline-danger:disabled:focus, .btn-outline-danger.custom-file-control:disabled:focus::before, .btn.btn-outline-danger:disabled.focus, .btn-outline-danger.custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #f44336; }
    .btn.btn-outline-danger.disabled:hover, .btn-outline-danger.disabled.custom-file-control:hover::before, .btn.btn-outline-danger:disabled:hover, .btn-outline-danger.custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #f44336; }
    .bg-inverse .btn.btn-outline-danger, .bg-inverse .btn-outline-danger.custom-file-control::before {
      color: #f44336;
      background-color: transparent;
      border-color: #f44336; }
      .bg-inverse .btn.btn-outline-danger:hover, .bg-inverse .btn-outline-danger.custom-file-control:hover::before {
        color: #f44336;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-danger:focus, .bg-inverse .btn-outline-danger.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-danger.focus, .bg-inverse .btn-outline-danger.focus.custom-file-control::before {
        color: #f44336;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-danger:active, .bg-inverse .btn-outline-danger.custom-file-control:active::before, .bg-inverse .btn.btn-outline-danger.active, .bg-inverse .btn-outline-danger.active.custom-file-control::before,
      .open > .bg-inverse .btn.btn-outline-danger.dropdown-toggle,
      .open > .bg-inverse .btn-outline-danger.dropdown-toggle.custom-file-control::before {
        color: #f44336;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
        .bg-inverse .btn.btn-outline-danger:active:hover, .bg-inverse .btn-outline-danger.custom-file-control:active:hover::before, .bg-inverse .btn.btn-outline-danger:active:focus, .bg-inverse .btn-outline-danger.custom-file-control:active:focus::before, .bg-inverse .btn.btn-outline-danger:active.focus, .bg-inverse .btn-outline-danger.custom-file-control:active.focus::before, .bg-inverse .btn.btn-outline-danger.active:hover, .bg-inverse .btn-outline-danger.active.custom-file-control:hover::before, .bg-inverse .btn.btn-outline-danger.active:focus, .bg-inverse .btn-outline-danger.active.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-danger.active.focus, .bg-inverse .btn-outline-danger.active.focus.custom-file-control::before,
        .open > .bg-inverse .btn.btn-outline-danger.dropdown-toggle:hover,
        .open > .bg-inverse .btn-outline-danger.dropdown-toggle.custom-file-control:hover::before,
        .open > .bg-inverse .btn.btn-outline-danger.dropdown-toggle:focus,
        .open > .bg-inverse .btn-outline-danger.dropdown-toggle.custom-file-control:focus::before,
        .open > .bg-inverse .btn.btn-outline-danger.dropdown-toggle.focus,
        .open > .bg-inverse .btn-outline-danger.dropdown-toggle.focus.custom-file-control::before {
          color: #f44336;
          background-color: rgba(204, 204, 204, 0.25);
          border-color: rgba(204, 204, 204, 0.25); }
      .open > .bg-inverse .btn.btn-outline-danger.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .btn-outline-danger.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
        color: inherit;
        background-color: transparent; }
        .open > .bg-inverse .btn.btn-outline-danger.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .btn-outline-danger.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
          background-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-danger.disabled:focus, .bg-inverse .btn-outline-danger.disabled.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-danger.disabled.focus, .bg-inverse .btn-outline-danger.disabled.focus.custom-file-control::before, .bg-inverse .btn.btn-outline-danger:disabled:focus, .bg-inverse .btn-outline-danger.custom-file-control:disabled:focus::before, .bg-inverse .btn.btn-outline-danger:disabled.focus, .bg-inverse .btn-outline-danger.custom-file-control:disabled.focus::before {
        background-color: transparent;
        border-color: #f44336; }
      .bg-inverse .btn.btn-outline-danger.disabled:hover, .bg-inverse .btn-outline-danger.disabled.custom-file-control:hover::before, .bg-inverse .btn.btn-outline-danger:disabled:hover, .bg-inverse .btn-outline-danger.custom-file-control:disabled:hover::before {
        background-color: transparent;
        border-color: #f44336; }
    .btn.btn-outline-danger.btn-link, .btn-outline-danger.btn-link.custom-file-control::before {
      background-color: transparent; }
  .btn.btn-outline-light, .btn-outline-light.custom-file-control::before {
    border-color: currentColor;
    border-style: solid;
    border-width: 1px;
    color: #f5f5f5;
    background-color: transparent;
    border-color: #f5f5f5; }
    .btn.btn-outline-light:hover, .btn-outline-light.custom-file-control:hover::before {
      color: #f5f5f5;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #f5f5f5; }
    .btn.btn-outline-light:focus, .btn-outline-light.custom-file-control:focus::before, .btn.btn-outline-light.focus, .btn-outline-light.focus.custom-file-control::before {
      color: #f5f5f5;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #f5f5f5; }
    .btn.btn-outline-light:active, .btn-outline-light.custom-file-control:active::before, .btn.btn-outline-light.active, .btn-outline-light.active.custom-file-control::before,
    .open > .btn.btn-outline-light.dropdown-toggle,
    .open > .btn-outline-light.dropdown-toggle.custom-file-control::before {
      color: #f5f5f5;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #f5f5f5; }
      .btn.btn-outline-light:active:hover, .btn-outline-light.custom-file-control:active:hover::before, .btn.btn-outline-light:active:focus, .btn-outline-light.custom-file-control:active:focus::before, .btn.btn-outline-light:active.focus, .btn-outline-light.custom-file-control:active.focus::before, .btn.btn-outline-light.active:hover, .btn-outline-light.active.custom-file-control:hover::before, .btn.btn-outline-light.active:focus, .btn-outline-light.active.custom-file-control:focus::before, .btn.btn-outline-light.active.focus, .btn-outline-light.active.focus.custom-file-control::before,
      .open > .btn.btn-outline-light.dropdown-toggle:hover,
      .open > .btn-outline-light.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-outline-light.dropdown-toggle:focus,
      .open > .btn-outline-light.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-outline-light.dropdown-toggle.focus,
      .open > .btn-outline-light.dropdown-toggle.focus.custom-file-control::before {
        color: #f5f5f5;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: #f5f5f5; }
    .open > .btn.btn-outline-light.dropdown-toggle.bmd-btn-icon, .open > .btn-outline-light.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .btn.btn-outline-light.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-outline-light.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-outline-light.disabled:focus, .btn-outline-light.disabled.custom-file-control:focus::before, .btn.btn-outline-light.disabled.focus, .btn-outline-light.disabled.focus.custom-file-control::before, .btn.btn-outline-light:disabled:focus, .btn-outline-light.custom-file-control:disabled:focus::before, .btn.btn-outline-light:disabled.focus, .btn-outline-light.custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #f5f5f5; }
    .btn.btn-outline-light.disabled:hover, .btn-outline-light.disabled.custom-file-control:hover::before, .btn.btn-outline-light:disabled:hover, .btn-outline-light.custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #f5f5f5; }
    .bg-inverse .btn.btn-outline-light, .bg-inverse .btn-outline-light.custom-file-control::before {
      color: #f5f5f5;
      background-color: transparent;
      border-color: #f5f5f5; }
      .bg-inverse .btn.btn-outline-light:hover, .bg-inverse .btn-outline-light.custom-file-control:hover::before {
        color: #f5f5f5;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-light:focus, .bg-inverse .btn-outline-light.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-light.focus, .bg-inverse .btn-outline-light.focus.custom-file-control::before {
        color: #f5f5f5;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-light:active, .bg-inverse .btn-outline-light.custom-file-control:active::before, .bg-inverse .btn.btn-outline-light.active, .bg-inverse .btn-outline-light.active.custom-file-control::before,
      .open > .bg-inverse .btn.btn-outline-light.dropdown-toggle,
      .open > .bg-inverse .btn-outline-light.dropdown-toggle.custom-file-control::before {
        color: #f5f5f5;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
        .bg-inverse .btn.btn-outline-light:active:hover, .bg-inverse .btn-outline-light.custom-file-control:active:hover::before, .bg-inverse .btn.btn-outline-light:active:focus, .bg-inverse .btn-outline-light.custom-file-control:active:focus::before, .bg-inverse .btn.btn-outline-light:active.focus, .bg-inverse .btn-outline-light.custom-file-control:active.focus::before, .bg-inverse .btn.btn-outline-light.active:hover, .bg-inverse .btn-outline-light.active.custom-file-control:hover::before, .bg-inverse .btn.btn-outline-light.active:focus, .bg-inverse .btn-outline-light.active.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-light.active.focus, .bg-inverse .btn-outline-light.active.focus.custom-file-control::before,
        .open > .bg-inverse .btn.btn-outline-light.dropdown-toggle:hover,
        .open > .bg-inverse .btn-outline-light.dropdown-toggle.custom-file-control:hover::before,
        .open > .bg-inverse .btn.btn-outline-light.dropdown-toggle:focus,
        .open > .bg-inverse .btn-outline-light.dropdown-toggle.custom-file-control:focus::before,
        .open > .bg-inverse .btn.btn-outline-light.dropdown-toggle.focus,
        .open > .bg-inverse .btn-outline-light.dropdown-toggle.focus.custom-file-control::before {
          color: #f5f5f5;
          background-color: rgba(204, 204, 204, 0.25);
          border-color: rgba(204, 204, 204, 0.25); }
      .open > .bg-inverse .btn.btn-outline-light.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .btn-outline-light.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
        color: inherit;
        background-color: transparent; }
        .open > .bg-inverse .btn.btn-outline-light.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .btn-outline-light.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
          background-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-light.disabled:focus, .bg-inverse .btn-outline-light.disabled.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-light.disabled.focus, .bg-inverse .btn-outline-light.disabled.focus.custom-file-control::before, .bg-inverse .btn.btn-outline-light:disabled:focus, .bg-inverse .btn-outline-light.custom-file-control:disabled:focus::before, .bg-inverse .btn.btn-outline-light:disabled.focus, .bg-inverse .btn-outline-light.custom-file-control:disabled.focus::before {
        background-color: transparent;
        border-color: #f5f5f5; }
      .bg-inverse .btn.btn-outline-light.disabled:hover, .bg-inverse .btn-outline-light.disabled.custom-file-control:hover::before, .bg-inverse .btn.btn-outline-light:disabled:hover, .bg-inverse .btn-outline-light.custom-file-control:disabled:hover::before {
        background-color: transparent;
        border-color: #f5f5f5; }
    .btn.btn-outline-light.btn-link, .btn-outline-light.btn-link.custom-file-control::before {
      background-color: transparent; }
  .btn.btn-outline-dark, .btn-outline-dark.custom-file-control::before {
    border-color: currentColor;
    border-style: solid;
    border-width: 1px;
    color: #424242;
    background-color: transparent;
    border-color: #424242; }
    .btn.btn-outline-dark:hover, .btn-outline-dark.custom-file-control:hover::before {
      color: #424242;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #424242; }
    .btn.btn-outline-dark:focus, .btn-outline-dark.custom-file-control:focus::before, .btn.btn-outline-dark.focus, .btn-outline-dark.focus.custom-file-control::before {
      color: #424242;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #424242; }
    .btn.btn-outline-dark:active, .btn-outline-dark.custom-file-control:active::before, .btn.btn-outline-dark.active, .btn-outline-dark.active.custom-file-control::before,
    .open > .btn.btn-outline-dark.dropdown-toggle,
    .open > .btn-outline-dark.dropdown-toggle.custom-file-control::before {
      color: #424242;
      background-color: rgba(153, 153, 153, 0.2);
      border-color: #424242; }
      .btn.btn-outline-dark:active:hover, .btn-outline-dark.custom-file-control:active:hover::before, .btn.btn-outline-dark:active:focus, .btn-outline-dark.custom-file-control:active:focus::before, .btn.btn-outline-dark:active.focus, .btn-outline-dark.custom-file-control:active.focus::before, .btn.btn-outline-dark.active:hover, .btn-outline-dark.active.custom-file-control:hover::before, .btn.btn-outline-dark.active:focus, .btn-outline-dark.active.custom-file-control:focus::before, .btn.btn-outline-dark.active.focus, .btn-outline-dark.active.focus.custom-file-control::before,
      .open > .btn.btn-outline-dark.dropdown-toggle:hover,
      .open > .btn-outline-dark.dropdown-toggle.custom-file-control:hover::before,
      .open > .btn.btn-outline-dark.dropdown-toggle:focus,
      .open > .btn-outline-dark.dropdown-toggle.custom-file-control:focus::before,
      .open > .btn.btn-outline-dark.dropdown-toggle.focus,
      .open > .btn-outline-dark.dropdown-toggle.focus.custom-file-control::before {
        color: #424242;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: #424242; }
    .open > .btn.btn-outline-dark.dropdown-toggle.bmd-btn-icon, .open > .btn-outline-dark.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
      color: inherit;
      background-color: transparent; }
      .open > .btn.btn-outline-dark.dropdown-toggle.bmd-btn-icon:hover, .open > .btn-outline-dark.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-outline-dark.disabled:focus, .btn-outline-dark.disabled.custom-file-control:focus::before, .btn.btn-outline-dark.disabled.focus, .btn-outline-dark.disabled.focus.custom-file-control::before, .btn.btn-outline-dark:disabled:focus, .btn-outline-dark.custom-file-control:disabled:focus::before, .btn.btn-outline-dark:disabled.focus, .btn-outline-dark.custom-file-control:disabled.focus::before {
      background-color: transparent;
      border-color: #424242; }
    .btn.btn-outline-dark.disabled:hover, .btn-outline-dark.disabled.custom-file-control:hover::before, .btn.btn-outline-dark:disabled:hover, .btn-outline-dark.custom-file-control:disabled:hover::before {
      background-color: transparent;
      border-color: #424242; }
    .bg-inverse .btn.btn-outline-dark, .bg-inverse .btn-outline-dark.custom-file-control::before {
      color: #424242;
      background-color: transparent;
      border-color: #424242; }
      .bg-inverse .btn.btn-outline-dark:hover, .bg-inverse .btn-outline-dark.custom-file-control:hover::before {
        color: #424242;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-dark:focus, .bg-inverse .btn-outline-dark.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-dark.focus, .bg-inverse .btn-outline-dark.focus.custom-file-control::before {
        color: #424242;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-dark:active, .bg-inverse .btn-outline-dark.custom-file-control:active::before, .bg-inverse .btn.btn-outline-dark.active, .bg-inverse .btn-outline-dark.active.custom-file-control::before,
      .open > .bg-inverse .btn.btn-outline-dark.dropdown-toggle,
      .open > .bg-inverse .btn-outline-dark.dropdown-toggle.custom-file-control::before {
        color: #424242;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
        .bg-inverse .btn.btn-outline-dark:active:hover, .bg-inverse .btn-outline-dark.custom-file-control:active:hover::before, .bg-inverse .btn.btn-outline-dark:active:focus, .bg-inverse .btn-outline-dark.custom-file-control:active:focus::before, .bg-inverse .btn.btn-outline-dark:active.focus, .bg-inverse .btn-outline-dark.custom-file-control:active.focus::before, .bg-inverse .btn.btn-outline-dark.active:hover, .bg-inverse .btn-outline-dark.active.custom-file-control:hover::before, .bg-inverse .btn.btn-outline-dark.active:focus, .bg-inverse .btn-outline-dark.active.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-dark.active.focus, .bg-inverse .btn-outline-dark.active.focus.custom-file-control::before,
        .open > .bg-inverse .btn.btn-outline-dark.dropdown-toggle:hover,
        .open > .bg-inverse .btn-outline-dark.dropdown-toggle.custom-file-control:hover::before,
        .open > .bg-inverse .btn.btn-outline-dark.dropdown-toggle:focus,
        .open > .bg-inverse .btn-outline-dark.dropdown-toggle.custom-file-control:focus::before,
        .open > .bg-inverse .btn.btn-outline-dark.dropdown-toggle.focus,
        .open > .bg-inverse .btn-outline-dark.dropdown-toggle.focus.custom-file-control::before {
          color: #424242;
          background-color: rgba(204, 204, 204, 0.25);
          border-color: rgba(204, 204, 204, 0.25); }
      .open > .bg-inverse .btn.btn-outline-dark.dropdown-toggle.bmd-btn-icon, .open > .bg-inverse .btn-outline-dark.dropdown-toggle.bmd-btn-icon.custom-file-control::before {
        color: inherit;
        background-color: transparent; }
        .open > .bg-inverse .btn.btn-outline-dark.dropdown-toggle.bmd-btn-icon:hover, .open > .bg-inverse .btn-outline-dark.dropdown-toggle.bmd-btn-icon.custom-file-control:hover::before {
          background-color: rgba(204, 204, 204, 0.15); }
      .bg-inverse .btn.btn-outline-dark.disabled:focus, .bg-inverse .btn-outline-dark.disabled.custom-file-control:focus::before, .bg-inverse .btn.btn-outline-dark.disabled.focus, .bg-inverse .btn-outline-dark.disabled.focus.custom-file-control::before, .bg-inverse .btn.btn-outline-dark:disabled:focus, .bg-inverse .btn-outline-dark.custom-file-control:disabled:focus::before, .bg-inverse .btn.btn-outline-dark:disabled.focus, .bg-inverse .btn-outline-dark.custom-file-control:disabled.focus::before {
        background-color: transparent;
        border-color: #424242; }
      .bg-inverse .btn.btn-outline-dark.disabled:hover, .bg-inverse .btn-outline-dark.disabled.custom-file-control:hover::before, .bg-inverse .btn.btn-outline-dark:disabled:hover, .bg-inverse .btn-outline-dark.custom-file-control:disabled:hover::before {
        background-color: transparent;
        border-color: #424242; }
    .btn.btn-outline-dark.btn-link, .btn-outline-dark.btn-link.custom-file-control::before {
      background-color: transparent; }
  .btn.bmd-btn-fab, .bmd-btn-fab.custom-file-control::before, .btn.bmd-btn-icon, .bmd-btn-icon.custom-file-control::before {
    overflow: hidden;
    font-size: 1.5rem;
    line-height: 0; }
    .btn-group-lg .btn.bmd-btn-fab, .btn-group-lg .bmd-btn-fab.custom-file-control::before,
    .btn-group-sm .btn.bmd-btn-fab,
    .btn-group-sm .bmd-btn-fab.custom-file-control::before, .btn.bmd-btn-fab, .bmd-btn-fab.custom-file-control::before, .btn-group-lg .btn.bmd-btn-icon, .btn-group-lg .bmd-btn-icon.custom-file-control::before,
    .btn-group-sm .btn.bmd-btn-icon,
    .btn-group-sm .bmd-btn-icon.custom-file-control::before, .btn.bmd-btn-icon, .bmd-btn-icon.custom-file-control::before {
      padding: 0;
      border-radius: 50%;
      line-height: 0; }
    .btn.bmd-btn-fab .material-icons, .bmd-btn-fab.custom-file-control::before .material-icons, .btn.bmd-btn-icon .material-icons, .bmd-btn-icon.custom-file-control::before .material-icons {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 1.5rem;
      line-height: 1.5rem;
      transform: translate(-0.75rem, -0.75rem); }
  .btn.bmd-btn-fab, .bmd-btn-fab.custom-file-control::before {
    width: 3.5rem;
    min-width: 3.5rem;
    height: 3.5rem;
    box-shadow: 0 1px 1.5px 0 rgba(0, 0, 0, 0.12), 0 1px 1px 0 rgba(0, 0, 0, 0.26); }
    .btn.bmd-btn-fab .ripple-container, .bmd-btn-fab.custom-file-control::before .ripple-container {
      border-radius: 50%; }
    .btn.bmd-btn-fab.bmd-btn-fab-sm, .bmd-btn-fab.bmd-btn-fab-sm.custom-file-control::before,
    .btn-group-sm .btn.bmd-btn-fab,
    .btn-group-sm .bmd-btn-fab.custom-file-control::before {
      width: 2.5rem;
      min-width: 2.5rem;
      height: 2.5rem; }
  .btn.bmd-btn-icon, .bmd-btn-icon.custom-file-control::before {
    width: 2rem;
    min-width: 2rem;
    height: 2rem;
    margin: 0;
    color: inherit;
    line-height: 0; }
    .btn.bmd-btn-icon.bmd-btn-icon-sm, .bmd-btn-icon.bmd-btn-icon-sm.custom-file-control::before,
    .btn-group-sm .btn.bmd-btn-icon,
    .btn-group-sm .bmd-btn-icon.custom-file-control::before {
      width: 1.5rem;
      min-width: 1.5rem;
      height: 1.5rem;
      font-size: 1.125rem; }
      .btn.bmd-btn-icon.bmd-btn-icon-sm .material-icons, .bmd-btn-icon.bmd-btn-icon-sm.custom-file-control::before .material-icons,
      .btn-group-sm .btn.bmd-btn-icon .material-icons,
      .btn-group-sm .bmd-btn-icon.custom-file-control::before .material-icons {
        width: 1.125rem;
        font-size: 1.125rem;
        line-height: 1;
        vertical-align: middle;
        transform: translate(-0.5625rem, -0.5625rem); }
  .btn .material-icons, .custom-file-control::before .material-icons {
    position: relative;
    display: inline-block;
    top: .25em;
    margin-top: -1em;
    margin-bottom: -1em;
    font-size: 1.5em;
    vertical-align: middle; }
  .btn.btn-lg, .btn-group-lg > .btn, .btn-group-lg > .custom-file-control::before, .btn-lg.custom-file-control::before,
  .btn-group-lg .btn,
  .btn-group-lg .custom-file-control::before {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem; }
  .btn.btn-sm, .btn-group-sm > .btn, .btn-group-sm > .custom-file-control::before, .btn-sm.custom-file-control::before,
  .btn-group-sm .btn,
  .btn-group-sm .custom-file-control::before {
    padding: 0.40625rem 0.5rem;
    font-size: 0.8125rem;
    line-height: 1.5;
    border-radius: 0.0625rem;
    font-size: 0.8125rem; }

fieldset[disabled][disabled] .btn, fieldset[disabled][disabled] .custom-file-control::before, .btn.disabled, .disabled.custom-file-control::before, .btn:disabled, .custom-file-control:disabled::before, .btn[disabled], [disabled].custom-file-control::before, fieldset[disabled][disabled]
.input-group-btn .btn, fieldset[disabled][disabled]
.input-group-btn .custom-file-control::before,
.input-group-btn .btn.disabled,
.input-group-btn .disabled.custom-file-control::before,
.input-group-btn .btn:disabled,
.input-group-btn .custom-file-control:disabled::before,
.input-group-btn .btn[disabled],
.input-group-btn [disabled].custom-file-control::before, fieldset[disabled][disabled]
.btn-group,
.btn-group.disabled,
.btn-group:disabled,
.btn-group[disabled], fieldset[disabled][disabled]
.btn-group-vertical,
.btn-group-vertical.disabled,
.btn-group-vertical:disabled,
.btn-group-vertical[disabled] {
  color: rgba(0, 0, 0, 0.26); }
  .bg-inverse fieldset[disabled][disabled] .btn, .bg-inverse fieldset[disabled][disabled] .custom-file-control::before, .bg-inverse .btn.disabled, .bg-inverse .disabled.custom-file-control::before, .bg-inverse .btn:disabled, .bg-inverse .custom-file-control:disabled::before, .bg-inverse .btn[disabled], .bg-inverse [disabled].custom-file-control::before, .bg-inverse fieldset[disabled][disabled]
  .input-group-btn .btn, .bg-inverse fieldset[disabled][disabled]
  .input-group-btn .custom-file-control::before, .bg-inverse
  .input-group-btn .btn.disabled, .bg-inverse
  .input-group-btn .disabled.custom-file-control::before, .bg-inverse
  .input-group-btn .btn:disabled, .bg-inverse
  .input-group-btn .custom-file-control:disabled::before, .bg-inverse
  .input-group-btn .btn[disabled], .bg-inverse
  .input-group-btn [disabled].custom-file-control::before, .bg-inverse fieldset[disabled][disabled]
  .btn-group, .bg-inverse
  .btn-group.disabled, .bg-inverse
  .btn-group:disabled, .bg-inverse
  .btn-group[disabled], .bg-inverse fieldset[disabled][disabled]
  .btn-group-vertical, .bg-inverse
  .btn-group-vertical.disabled, .bg-inverse
  .btn-group-vertical:disabled, .bg-inverse
  .btn-group-vertical[disabled] {
    color: rgba(255, 255, 255, 0.3); }
  fieldset[disabled][disabled] .btn, fieldset[disabled][disabled] .custom-file-control::before, fieldset[disabled][disabled] .btn:hover, fieldset[disabled][disabled] .custom-file-control:hover::before, fieldset[disabled][disabled] .btn:focus, fieldset[disabled][disabled] .custom-file-control:focus::before, .btn.disabled, .disabled.custom-file-control::before, .btn.disabled:hover, .disabled.custom-file-control:hover::before, .btn.disabled:focus, .disabled.custom-file-control:focus::before, .btn:disabled, .custom-file-control:disabled::before, .btn:disabled:hover, .custom-file-control:disabled:hover::before, .btn:disabled:focus, .custom-file-control:disabled:focus::before, .btn[disabled], [disabled].custom-file-control::before, .btn[disabled]:hover, [disabled].custom-file-control:hover::before, .btn[disabled]:focus, [disabled].custom-file-control:focus::before, fieldset[disabled][disabled]
  .input-group-btn .btn, fieldset[disabled][disabled]
  .input-group-btn .custom-file-control::before, fieldset[disabled][disabled]
  .input-group-btn .btn:hover, fieldset[disabled][disabled]
  .input-group-btn .custom-file-control:hover::before, fieldset[disabled][disabled]
  .input-group-btn .btn:focus, fieldset[disabled][disabled]
  .input-group-btn .custom-file-control:focus::before,
  .input-group-btn .btn.disabled,
  .input-group-btn .disabled.custom-file-control::before,
  .input-group-btn .btn.disabled:hover,
  .input-group-btn .disabled.custom-file-control:hover::before,
  .input-group-btn .btn.disabled:focus,
  .input-group-btn .disabled.custom-file-control:focus::before,
  .input-group-btn .btn:disabled,
  .input-group-btn .custom-file-control:disabled::before,
  .input-group-btn .btn:disabled:hover,
  .input-group-btn .custom-file-control:disabled:hover::before,
  .input-group-btn .btn:disabled:focus,
  .input-group-btn .custom-file-control:disabled:focus::before,
  .input-group-btn .btn[disabled],
  .input-group-btn [disabled].custom-file-control::before,
  .input-group-btn .btn[disabled]:hover,
  .input-group-btn [disabled].custom-file-control:hover::before,
  .input-group-btn .btn[disabled]:focus,
  .input-group-btn [disabled].custom-file-control:focus::before, fieldset[disabled][disabled]
  .btn-group, fieldset[disabled][disabled]
  .btn-group:hover, fieldset[disabled][disabled]
  .btn-group:focus,
  .btn-group.disabled,
  .btn-group.disabled:hover,
  .btn-group.disabled:focus,
  .btn-group:disabled,
  .btn-group:disabled:hover,
  .btn-group:disabled:focus,
  .btn-group[disabled],
  .btn-group[disabled]:hover,
  .btn-group[disabled]:focus, fieldset[disabled][disabled]
  .btn-group-vertical, fieldset[disabled][disabled]
  .btn-group-vertical:hover, fieldset[disabled][disabled]
  .btn-group-vertical:focus,
  .btn-group-vertical.disabled,
  .btn-group-vertical.disabled:hover,
  .btn-group-vertical.disabled:focus,
  .btn-group-vertical:disabled,
  .btn-group-vertical:disabled:hover,
  .btn-group-vertical:disabled:focus,
  .btn-group-vertical[disabled],
  .btn-group-vertical[disabled]:hover,
  .btn-group-vertical[disabled]:focus {
    background: transparent; }

.btn-group,
.btn-group-vertical {
  position: relative;
  margin: 10px 1px; }
  .btn-group .dropdown-menu,
  .btn-group-vertical .dropdown-menu {
    border-radius: 0 0 0.125rem 0.125rem; }
  .btn-group.btn-group-raised,
  .btn-group-vertical.btn-group-raised {
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
  .btn-group .btn + .btn, .btn-group .custom-file-control::before + .btn, .btn-group .btn + .custom-file-control::before, .btn-group .custom-file-control::before + .custom-file-control::before,
  .btn-group .btn,
  .btn-group .custom-file-control::before,
  .btn-group .btn:active,
  .btn-group .custom-file-control:active::before,
  .btn-group .btn-group,
  .btn-group-vertical .btn + .btn,
  .btn-group-vertical .custom-file-control::before + .btn,
  .btn-group-vertical .btn + .custom-file-control::before,
  .btn-group-vertical .custom-file-control::before + .custom-file-control::before,
  .btn-group-vertical .btn,
  .btn-group-vertical .custom-file-control::before,
  .btn-group-vertical .btn:active,
  .btn-group-vertical .custom-file-control:active::before,
  .btn-group-vertical .btn-group {
    margin: 0; }
  .btn-group > .btn-group,
  .btn-group-vertical > .btn-group {
    margin: 0; }

.checkbox label,
label.checkbox-inline {
  position: relative;
  padding-left: 1.5625rem; }
  .checkbox label .checkbox-decorator,
  label.checkbox-inline .checkbox-decorator {
    position: absolute;
    left: 0;
    padding: .7em;
    margin: -.7em;
    line-height: .7;
    vertical-align: middle;
    cursor: pointer;
    border-radius: 100%; }
    .checkbox label .checkbox-decorator .check,
    label.checkbox-inline .checkbox-decorator .check {
      position: relative;
      z-index: 1;
      display: inline-block;
      width: 1.25rem;
      height: 1.25rem;
      overflow: hidden;
      border: 0.125rem solid rgba(0, 0, 0, 0.54);
      border-radius: 0.125rem; }
      .checkbox label .checkbox-decorator .check::before,
      label.checkbox-inline .checkbox-decorator .check::before {
        position: absolute;
        display: block;
        width: 0;
        height: 0;
        margin-top: -4px;
        margin-left: 6px;
        color: #757575;
        content: "";
        box-shadow: 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0 inset;
        transform: rotate(45deg);
        animation: checkbox-off; }
        .is-focused .checkbox label .checkbox-decorator .check::before, .is-focused
        label.checkbox-inline .checkbox-decorator .check::before {
          animation: checkbox-off 0.3s forwards; }
  .checkbox label input[type=checkbox],
  label.checkbox-inline input[type=checkbox] {
    position: absolute;
    left: 0;
    z-index: -1;
    width: 0;
    height: 0;
    margin: 0;
    overflow: hidden;
    pointer-events: none;
    opacity: 0; }
    .checkbox label input[type=checkbox]:focus + .checkbox-decorator .check::after,
    label.checkbox-inline input[type=checkbox]:focus + .checkbox-decorator .check::after {
      opacity: 0.2; }
    .checkbox label input[type=checkbox]:checked + .checkbox-decorator .check,
    label.checkbox-inline input[type=checkbox]:checked + .checkbox-decorator .check {
      color: #009688;
      border-color: #009688; }
    .checkbox label input[type=checkbox]:checked + .checkbox-decorator .check::before,
    label.checkbox-inline input[type=checkbox]:checked + .checkbox-decorator .check::before {
      color: #009688;
      box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 032px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px;
      animation: checkbox-on 0.3s forwards; }
    .checkbox label input[type=checkbox][disabled] + .checkbox-decorator .check::after,
    .checkbox label input[type=checkbox][disabled] .check::after,
    fieldset[disabled] .checkbox label input[type=checkbox] + .checkbox-decorator .check::after,
    fieldset[disabled] .checkbox label input[type=checkbox] .check::after,
    label.checkbox-inline input[type=checkbox][disabled] + .checkbox-decorator .check::after,
    label.checkbox-inline input[type=checkbox][disabled] .check::after,
    fieldset[disabled]
    label.checkbox-inline input[type=checkbox] + .checkbox-decorator .check::after,
    fieldset[disabled]
    label.checkbox-inline input[type=checkbox] .check::after {
      background-color: rgba(0, 0, 0, 0.87);
      transform: rotate(-45deg); }
    .checkbox label input[type=checkbox][disabled] + .checkbox-decorator .check,
    .checkbox label input[type=checkbox][disabled] .check,
    fieldset[disabled] .checkbox label input[type=checkbox] + .checkbox-decorator .check,
    fieldset[disabled] .checkbox label input[type=checkbox] .check,
    label.checkbox-inline input[type=checkbox][disabled] + .checkbox-decorator .check,
    label.checkbox-inline input[type=checkbox][disabled] .check,
    fieldset[disabled]
    label.checkbox-inline input[type=checkbox] + .checkbox-decorator .check,
    fieldset[disabled]
    label.checkbox-inline input[type=checkbox] .check {
      border-color: rgba(0, 0, 0, 0.26); }
    .checkbox label input[type=checkbox][disabled] + .checkbox-decorator .ripple-container,
    fieldset[disabled] .checkbox label input[type=checkbox] + .checkbox-decorator .ripple-container,
    label.checkbox-inline input[type=checkbox][disabled] + .checkbox-decorator .ripple-container,
    fieldset[disabled]
    label.checkbox-inline input[type=checkbox] + .checkbox-decorator .ripple-container {
      display: none; }

@keyframes checkbox-on {
  0% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0 32px 0 20px, -5px 5px 0 10px, 15px 2px 0 11px; }
  50% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0 32px 0 20px, -5px 5px 0 10px, 20px 2px 0 11px; }
  100% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px; } }

@keyframes checkbox-off {
  0% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px, 0 0 0 0 inset; }
  25% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px, 0 0 0 0 inset; }
  50% {
    width: 0;
    height: 0;
    margin-top: -4px;
    margin-left: 6px;
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0 32px 0 20px, -5px 5px 0 10px, 15px 2px 0 11px, 0 0 0 0 inset;
    transform: rotate(45deg); }
  51% {
    width: 20px;
    height: 20px;
    margin-top: -2px;
    margin-left: -2px;
    box-shadow: 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 10px inset;
    transform: rotate(0deg); }
  100% {
    width: 20px;
    height: 20px;
    margin-top: -2px;
    margin-left: -2px;
    box-shadow: 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0 inset;
    transform: rotate(0deg); } }

.custom-file-control [class^='bmd-label'],
.custom-file-control [class*=' bmd-label'] {
  color: rgba(0, 0, 0, 0.26); }

.custom-file-control .form-control, .custom-file-control .custom-file-control,
.is-focused .custom-file-control .form-control,
.is-focused .custom-file-control .custom-file-control {
  background-image: linear-gradient(to top, #009688 2px, rgba(0, 150, 136, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

.custom-file-control .form-control:invalid, .custom-file-control .custom-file-control:invalid {
  background-image: linear-gradient(to top, #d50000 2px, rgba(213, 0, 0, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

.custom-file-control .form-control:read-only, .custom-file-control .custom-file-control:read-only {
  background-image: linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

fieldset[disabled][disabled] .custom-file-control .form-control, fieldset[disabled][disabled] .custom-file-control .custom-file-control, .custom-file-control .form-control.disabled, .custom-file-control .disabled.custom-file-control, .custom-file-control .form-control:disabled, .custom-file-control .custom-file-control:disabled, .custom-file-control .form-control[disabled], .custom-file-control [disabled].custom-file-control {
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.26) 0%, rgba(0, 0, 0, 0.26) 30%, transparent 30%, transparent 100%);
  background-repeat: repeat-x;
  background-size: 3px 1px; }

.custom-file-control .form-control.form-control-success, .custom-file-control .form-control-success.custom-file-control,
.is-focused .custom-file-control .form-control.form-control-success,
.is-focused .custom-file-control .form-control-success.custom-file-control {
  background-image: linear-gradient(to top, #009688 2px, rgba(0, 150, 136, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg=="; }

.custom-file-control .form-control.form-control-warning, .custom-file-control .form-control-warning.custom-file-control,
.is-focused .custom-file-control .form-control.form-control-warning,
.is-focused .custom-file-control .form-control-warning.custom-file-control {
  background-image: linear-gradient(to top, #009688 2px, rgba(0, 150, 136, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+"; }

.custom-file-control .form-control.form-control-danger, .custom-file-control .form-control-danger.custom-file-control,
.is-focused .custom-file-control .form-control.form-control-danger,
.is-focused .custom-file-control .form-control-danger.custom-file-control {
  background-image: linear-gradient(to top, #009688 2px, rgba(0, 150, 136, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4="; }

.custom-file-control .is-focused .valid-feedback, .custom-file-control.is-focused .valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: rgba(0, 0, 0, 0.26); }

.custom-file-control .is-focused .valid-tooltip, .custom-file-control.is-focused .valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(0, 0, 0, 0.8);
  border-radius: .2rem; }

.was-validated .custom-file-control .is-focused .form-control:valid, .was-validated .custom-file-control .is-focused .custom-file-control:valid, .custom-file-control .is-focused .form-control.is-valid, .custom-file-control .is-focused .is-valid.custom-file-control, .was-validated
.custom-file-control .is-focused .custom-select:valid,
.custom-file-control .is-focused .custom-select.is-valid, .was-validated .custom-file-control.is-focused .form-control:valid, .was-validated .custom-file-control.is-focused .custom-file-control:valid, .custom-file-control.is-focused .form-control.is-valid, .custom-file-control.is-focused .is-valid.custom-file-control, .was-validated
.custom-file-control.is-focused .custom-select:valid,
.custom-file-control.is-focused .custom-select.is-valid {
  border-color: rgba(0, 0, 0, 0.26); }
  .was-validated .custom-file-control .is-focused .form-control:valid:focus, .was-validated .custom-file-control .is-focused .custom-file-control:valid:focus, .custom-file-control .is-focused .form-control.is-valid:focus, .custom-file-control .is-focused .is-valid.custom-file-control:focus, .was-validated
  .custom-file-control .is-focused .custom-select:valid:focus,
  .custom-file-control .is-focused .custom-select.is-valid:focus, .was-validated .custom-file-control.is-focused .form-control:valid:focus, .was-validated .custom-file-control.is-focused .custom-file-control:valid:focus, .custom-file-control.is-focused .form-control.is-valid:focus, .custom-file-control.is-focused .is-valid.custom-file-control:focus, .was-validated
  .custom-file-control.is-focused .custom-select:valid:focus,
  .custom-file-control.is-focused .custom-select.is-valid:focus {
    border-color: rgba(0, 0, 0, 0.26);
    box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.25); }
  .was-validated .custom-file-control .is-focused .form-control:valid ~ .valid-feedback, .was-validated .custom-file-control .is-focused .custom-file-control:valid ~ .valid-feedback,
  .was-validated .custom-file-control .is-focused .form-control:valid ~ .valid-tooltip,
  .was-validated .custom-file-control .is-focused .custom-file-control:valid ~ .valid-tooltip, .custom-file-control .is-focused .form-control.is-valid ~ .valid-feedback, .custom-file-control .is-focused .is-valid.custom-file-control ~ .valid-feedback,
  .custom-file-control .is-focused .form-control.is-valid ~ .valid-tooltip,
  .custom-file-control .is-focused .is-valid.custom-file-control ~ .valid-tooltip, .was-validated
  .custom-file-control .is-focused .custom-select:valid ~ .valid-feedback,
  .was-validated
  .custom-file-control .is-focused .custom-select:valid ~ .valid-tooltip,
  .custom-file-control .is-focused .custom-select.is-valid ~ .valid-feedback,
  .custom-file-control .is-focused .custom-select.is-valid ~ .valid-tooltip, .was-validated .custom-file-control.is-focused .form-control:valid ~ .valid-feedback, .was-validated .custom-file-control.is-focused .custom-file-control:valid ~ .valid-feedback,
  .was-validated .custom-file-control.is-focused .form-control:valid ~ .valid-tooltip,
  .was-validated .custom-file-control.is-focused .custom-file-control:valid ~ .valid-tooltip, .custom-file-control.is-focused .form-control.is-valid ~ .valid-feedback, .custom-file-control.is-focused .is-valid.custom-file-control ~ .valid-feedback,
  .custom-file-control.is-focused .form-control.is-valid ~ .valid-tooltip,
  .custom-file-control.is-focused .is-valid.custom-file-control ~ .valid-tooltip, .was-validated
  .custom-file-control.is-focused .custom-select:valid ~ .valid-feedback,
  .was-validated
  .custom-file-control.is-focused .custom-select:valid ~ .valid-tooltip,
  .custom-file-control.is-focused .custom-select.is-valid ~ .valid-feedback,
  .custom-file-control.is-focused .custom-select.is-valid ~ .valid-tooltip {
    display: block; }

.was-validated .custom-file-control .is-focused .form-check-input:valid ~ .form-check-label, .custom-file-control .is-focused .form-check-input.is-valid ~ .form-check-label, .was-validated .custom-file-control.is-focused .form-check-input:valid ~ .form-check-label, .custom-file-control.is-focused .form-check-input.is-valid ~ .form-check-label {
  color: rgba(0, 0, 0, 0.26); }

.was-validated .custom-file-control .is-focused .form-check-input:valid ~ .valid-feedback,
.was-validated .custom-file-control .is-focused .form-check-input:valid ~ .valid-tooltip, .custom-file-control .is-focused .form-check-input.is-valid ~ .valid-feedback,
.custom-file-control .is-focused .form-check-input.is-valid ~ .valid-tooltip, .was-validated .custom-file-control.is-focused .form-check-input:valid ~ .valid-feedback,
.was-validated .custom-file-control.is-focused .form-check-input:valid ~ .valid-tooltip, .custom-file-control.is-focused .form-check-input.is-valid ~ .valid-feedback,
.custom-file-control.is-focused .form-check-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-file-control .is-focused .custom-control-input:valid ~ .custom-control-label, .custom-file-control .is-focused .custom-control-input.is-valid ~ .custom-control-label, .was-validated .custom-file-control.is-focused .custom-control-input:valid ~ .custom-control-label, .custom-file-control.is-focused .custom-control-input.is-valid ~ .custom-control-label {
  color: rgba(0, 0, 0, 0.26); }
  .was-validated .custom-file-control .is-focused .custom-control-input:valid ~ .custom-control-label::before, .custom-file-control .is-focused .custom-control-input.is-valid ~ .custom-control-label::before, .was-validated .custom-file-control.is-focused .custom-control-input:valid ~ .custom-control-label::before, .custom-file-control.is-focused .custom-control-input.is-valid ~ .custom-control-label::before {
    background-color: rgba(64, 64, 64, 0.26); }

.was-validated .custom-file-control .is-focused .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-file-control .is-focused .custom-control-input:valid ~ .valid-tooltip, .custom-file-control .is-focused .custom-control-input.is-valid ~ .valid-feedback,
.custom-file-control .is-focused .custom-control-input.is-valid ~ .valid-tooltip, .was-validated .custom-file-control.is-focused .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-file-control.is-focused .custom-control-input:valid ~ .valid-tooltip, .custom-file-control.is-focused .custom-control-input.is-valid ~ .valid-feedback,
.custom-file-control.is-focused .custom-control-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-file-control .is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-file-control .is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before, .was-validated .custom-file-control.is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-file-control.is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  background-color: rgba(26, 26, 26, 0.26); }

.was-validated .custom-file-control .is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-file-control .is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before, .was-validated .custom-file-control.is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-file-control.is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(0, 0, 0, 0.25); }

.was-validated .custom-file-control .is-focused .custom-file-input:valid ~ .custom-file-label, .custom-file-control .is-focused .custom-file-input.is-valid ~ .custom-file-label, .was-validated .custom-file-control.is-focused .custom-file-input:valid ~ .custom-file-label, .custom-file-control.is-focused .custom-file-input.is-valid ~ .custom-file-label {
  border-color: rgba(0, 0, 0, 0.26); }
  .was-validated .custom-file-control .is-focused .custom-file-input:valid ~ .custom-file-label::before, .custom-file-control .is-focused .custom-file-input.is-valid ~ .custom-file-label::before, .was-validated .custom-file-control.is-focused .custom-file-input:valid ~ .custom-file-label::before, .custom-file-control.is-focused .custom-file-input.is-valid ~ .custom-file-label::before {
    border-color: inherit; }

.was-validated .custom-file-control .is-focused .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-control .is-focused .custom-file-input:valid ~ .valid-tooltip, .custom-file-control .is-focused .custom-file-input.is-valid ~ .valid-feedback,
.custom-file-control .is-focused .custom-file-input.is-valid ~ .valid-tooltip, .was-validated .custom-file-control.is-focused .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-control.is-focused .custom-file-input:valid ~ .valid-tooltip, .custom-file-control.is-focused .custom-file-input.is-valid ~ .valid-feedback,
.custom-file-control.is-focused .custom-file-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-file-control .is-focused .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-control .is-focused .custom-file-input.is-valid:focus ~ .custom-file-label, .was-validated .custom-file-control.is-focused .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-control.is-focused .custom-file-input.is-valid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.25); }

.custom-file-control .is-focused [class^='bmd-label'],
.custom-file-control .is-focused [class*=' bmd-label'], .custom-file-control.is-focused [class^='bmd-label'],
.custom-file-control.is-focused [class*=' bmd-label'] {
  color: #009688; }

.custom-file-control .is-focused .bmd-label-placeholder, .custom-file-control.is-focused .bmd-label-placeholder {
  color: rgba(0, 0, 0, 0.26); }

.custom-file-control .is-focused .form-control, .custom-file-control .is-focused .custom-file-control, .custom-file-control.is-focused .form-control, .custom-file-control.is-focused .custom-file-control {
  border-color: rgba(0, 0, 0, 0.26); }

.custom-file-control .is-focused .bmd-help, .custom-file-control.is-focused .bmd-help {
  color: rgba(0, 0, 0, 0.54); }

.custom-file-control::before {
  position: absolute;
  height: calc(100% - 1px); }

.switch label {
  position: relative;
  padding-left: 2.4375rem; }
  .switch label .bmd-switch-track {
    position: absolute;
    top: 0.3125rem;
    left: 0;
    display: inline-block;
    width: 2.125rem;
    height: 0.875rem;
    cursor: pointer;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0.26) 0%, rgba(0, 0, 0, 0.26) 50%, #49dcce 50%, #49dcce 100%);
    background-position: 0%;
    background-size: 4.25rem 0.875rem;
    border-radius: 2.125rem;
    transition: background-position 0.2s ease-in; }
    .switch label .bmd-switch-track::after {
      position: absolute;
      top: 50%;
      left: 0;
      display: block;
      align-self: center;
      width: 1.25rem;
      height: 1.25rem;
      content: "";
      background: #f1f1f1;
      border-radius: 100%;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
      transition: left 0.2s ease-in, background-color 0.2s ease-in, transform 0.3s ease;
      transform: translateY(-50%); }
    .switch label .bmd-switch-track:active::after {
      transform: translateY(-50%) scale3d(1.15, 0.85, 1); }
  .switch label input {
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    opacity: 0; }
    .switch label input:checked + .bmd-switch-track {
      background-position: -100%; }
      .switch label input:checked + .bmd-switch-track::after {
        left: calc(100% - 1.25rem);
        background-color: #009688; }
    .switch label input:disabled + .bmd-switch-track:active::after {
      transform: translateY(-50%); }
    .switch label input:disabled + .bmd-switch-track {
      cursor: default;
      background: rgba(0, 0, 0, 0.12); }
      .switch label input:disabled + .bmd-switch-track::after {
        background: #bdbdbd; }

.radio label,
label.radio-inline {
  position: relative;
  padding-left: 1.5625rem; }
  .radio label .bmd-radio,
  label.radio-inline .bmd-radio {
    position: absolute;
    left: 0;
    display: inline-block;
    padding: .7em;
    margin: -.7em;
    line-height: .7;
    border-radius: 100%; }
    .radio label .bmd-radio::after,
    label.radio-inline .bmd-radio::after {
      display: inline-block;
      width: 1.25rem;
      height: 1.25rem;
      cursor: pointer;
      content: "";
      border: 0.125rem solid rgba(0, 0, 0, 0.54);
      border-radius: 50%;
      transition: border-color ease .28s;
      transition-duration: 0.2s; }
    .radio label .bmd-radio::before,
    label.radio-inline .bmd-radio::before {
      position: absolute;
      display: inline-block;
      width: 1.25rem;
      height: 1.25rem;
      content: "";
      background-color: #009688;
      border-radius: 50%;
      transition: transform ease .28s;
      transform: scale3d(0, 0, 0); }
  .radio label input[type=radio],
  label.radio-inline input[type=radio] {
    position: absolute;
    left: 0;
    z-index: -1;
    width: 0;
    height: 0;
    margin: 0;
    overflow: hidden;
    pointer-events: none;
    opacity: 0; }
    .radio label input[type=radio]:checked ~ .bmd-radio::after,
    label.radio-inline input[type=radio]:checked ~ .bmd-radio::after {
      border-color: #009688; }
    .radio label input[type=radio]:checked ~ .bmd-radio::before,
    label.radio-inline input[type=radio]:checked ~ .bmd-radio::before {
      background-color: #009688; }
    .radio label input[type=radio]:checked ~ .bmd-radio::before,
    label.radio-inline input[type=radio]:checked ~ .bmd-radio::before {
      transform: scale3d(0.5, 0.5, 1); }
    .radio label input[type=radio][disabled] + .bmd-radio, .radio label input[type=radio]:disabled + .bmd-radio,
    fieldset[disabled] .radio label input[type=radio] + .bmd-radio,
    label.radio-inline input[type=radio][disabled] + .bmd-radio,
    label.radio-inline input[type=radio]:disabled + .bmd-radio,
    fieldset[disabled]
    label.radio-inline input[type=radio] + .bmd-radio {
      cursor: default; }
      .radio label input[type=radio][disabled] + .bmd-radio::after, .radio label input[type=radio]:disabled + .bmd-radio::after,
      fieldset[disabled] .radio label input[type=radio] + .bmd-radio::after,
      label.radio-inline input[type=radio][disabled] + .bmd-radio::after,
      label.radio-inline input[type=radio]:disabled + .bmd-radio::after,
      fieldset[disabled]
      label.radio-inline input[type=radio] + .bmd-radio::after {
        border-color: rgba(0, 0, 0, 0.26); }
      .radio label input[type=radio][disabled] + .bmd-radio::before, .radio label input[type=radio]:disabled + .bmd-radio::before,
      fieldset[disabled] .radio label input[type=radio] + .bmd-radio::before,
      label.radio-inline input[type=radio][disabled] + .bmd-radio::before,
      label.radio-inline input[type=radio]:disabled + .bmd-radio::before,
      fieldset[disabled]
      label.radio-inline input[type=radio] + .bmd-radio::before {
        background-color: rgba(0, 0, 0, 0.26); }
    .radio label input[type=radio][disabled] + .bmd-radio .ripple-container, .radio label input[type=radio]:disabled + .bmd-radio .ripple-container,
    fieldset[disabled] .radio label input[type=radio] + .bmd-radio .ripple-container,
    label.radio-inline input[type=radio][disabled] + .bmd-radio .ripple-container,
    label.radio-inline input[type=radio]:disabled + .bmd-radio .ripple-container,
    fieldset[disabled]
    label.radio-inline input[type=radio] + .bmd-radio .ripple-container {
      display: none; }
    .bg-inverse .radio label input[type=radio][disabled] + .bmd-radio::after, .bg-inverse .radio label input[type=radio]:disabled + .bmd-radio::after, .bg-inverse
    fieldset[disabled] .radio label input[type=radio] + .bmd-radio::after, .bg-inverse
    label.radio-inline input[type=radio][disabled] + .bmd-radio::after, .bg-inverse
    label.radio-inline input[type=radio]:disabled + .bmd-radio::after, .bg-inverse
    fieldset[disabled]
    label.radio-inline input[type=radio] + .bmd-radio::after {
      border-color: rgba(255, 255, 255, 0.3); }
    .bg-inverse .radio label input[type=radio][disabled] + .bmd-radio::before, .bg-inverse .radio label input[type=radio]:disabled + .bmd-radio::before, .bg-inverse
    fieldset[disabled] .radio label input[type=radio] + .bmd-radio::before, .bg-inverse
    label.radio-inline input[type=radio][disabled] + .bmd-radio::before, .bg-inverse
    label.radio-inline input[type=radio]:disabled + .bmd-radio::before, .bg-inverse
    fieldset[disabled]
    label.radio-inline input[type=radio] + .bmd-radio::before {
      background-color: rgba(255, 255, 255, 0.3); }

form {
  margin-bottom: 1.125rem; }
  .navbar form {
    margin-bottom: 0; }
    .navbar form .bmd-form-group {
      display: inline-block;
      padding-top: 0; }
    .navbar form .btn, .navbar form .custom-file-control::before {
      margin-bottom: 0; }

.form-control, .custom-file-control {
  background: no-repeat center bottom, center calc(100% - 1px);
  background-size: 0 100%, 100% 100%;
  border: 0;
  transition: background 0s ease-out;
  padding-left: 0;
  padding-right: 0; }
  .form-control:focus, .custom-file-control:focus,
  .bmd-form-group.is-focused .form-control,
  .bmd-form-group.is-focused .custom-file-control {
    background-size: 100% 100%, 100% 100%;
    transition-duration: 0.3s; }

.bmd-help {
  position: absolute;
  display: none;
  font-size: .8rem;
  font-weight: normal; }
  .bmd-form-group.is-focused .bmd-help {
    display: block; }
  .bmd-help:nth-of-type(2) {
    padding-top: 1rem; }
  .bmd-help + .bmd-help {
    position: relative;
    margin-bottom: 0; }

.radio label,
.is-focused .radio label,
.radio-inline,
.is-focused
.radio-inline,
.checkbox label,
.is-focused
.checkbox label,
.checkbox-inline,
.is-focused
.checkbox-inline,
.switch label,
.is-focused
.switch label {
  color: rgba(0, 0, 0, 0.26); }
  .radio label:hover, .radio label:focus, .radio label:active,
  .is-focused .radio label:hover,
  .is-focused .radio label:focus,
  .is-focused .radio label:active,
  .radio-inline:hover,
  .radio-inline:focus,
  .radio-inline:active,
  .is-focused
  .radio-inline:hover,
  .is-focused
  .radio-inline:focus,
  .is-focused
  .radio-inline:active,
  .checkbox label:hover,
  .checkbox label:focus,
  .checkbox label:active,
  .is-focused
  .checkbox label:hover,
  .is-focused
  .checkbox label:focus,
  .is-focused
  .checkbox label:active,
  .checkbox-inline:hover,
  .checkbox-inline:focus,
  .checkbox-inline:active,
  .is-focused
  .checkbox-inline:hover,
  .is-focused
  .checkbox-inline:focus,
  .is-focused
  .checkbox-inline:active,
  .switch label:hover,
  .switch label:focus,
  .switch label:active,
  .is-focused
  .switch label:hover,
  .is-focused
  .switch label:focus,
  .is-focused
  .switch label:active {
    color: rgba(0, 0, 0, 0.54); }
  .radio label label:has(input[type=radio][disabled]), .radio label label:has(input[type=radio][disabled]):hover, .radio label label:has(input[type=radio][disabled]):focus,
  .radio label label:has(input[type=checkbox][disabled]),
  .radio label label:has(input[type=checkbox][disabled]):hover,
  .radio label label:has(input[type=checkbox][disabled]):focus,
  fieldset[disabled] .radio label,
  fieldset[disabled] .radio label:hover,
  fieldset[disabled] .radio label:focus,
  .is-focused .radio label label:has(input[type=radio][disabled]),
  .is-focused .radio label label:has(input[type=radio][disabled]):hover,
  .is-focused .radio label label:has(input[type=radio][disabled]):focus,
  .is-focused .radio label label:has(input[type=checkbox][disabled]),
  .is-focused .radio label label:has(input[type=checkbox][disabled]):hover,
  .is-focused .radio label label:has(input[type=checkbox][disabled]):focus,
  fieldset[disabled]
  .is-focused .radio label,
  fieldset[disabled]
  .is-focused .radio label:hover,
  fieldset[disabled]
  .is-focused .radio label:focus,
  .radio-inline label:has(input[type=radio][disabled]),
  .radio-inline label:has(input[type=radio][disabled]):hover,
  .radio-inline label:has(input[type=radio][disabled]):focus,
  .radio-inline label:has(input[type=checkbox][disabled]),
  .radio-inline label:has(input[type=checkbox][disabled]):hover,
  .radio-inline label:has(input[type=checkbox][disabled]):focus,
  fieldset[disabled]
  .radio-inline,
  fieldset[disabled]
  .radio-inline:hover,
  fieldset[disabled]
  .radio-inline:focus,
  .is-focused
  .radio-inline label:has(input[type=radio][disabled]),
  .is-focused
  .radio-inline label:has(input[type=radio][disabled]):hover,
  .is-focused
  .radio-inline label:has(input[type=radio][disabled]):focus,
  .is-focused
  .radio-inline label:has(input[type=checkbox][disabled]),
  .is-focused
  .radio-inline label:has(input[type=checkbox][disabled]):hover,
  .is-focused
  .radio-inline label:has(input[type=checkbox][disabled]):focus,
  fieldset[disabled]
  .is-focused
  .radio-inline,
  fieldset[disabled]
  .is-focused
  .radio-inline:hover,
  fieldset[disabled]
  .is-focused
  .radio-inline:focus,
  .checkbox label label:has(input[type=radio][disabled]),
  .checkbox label label:has(input[type=radio][disabled]):hover,
  .checkbox label label:has(input[type=radio][disabled]):focus,
  .checkbox label label:has(input[type=checkbox][disabled]),
  .checkbox label label:has(input[type=checkbox][disabled]):hover,
  .checkbox label label:has(input[type=checkbox][disabled]):focus,
  fieldset[disabled]
  .checkbox label,
  fieldset[disabled]
  .checkbox label:hover,
  fieldset[disabled]
  .checkbox label:focus,
  .is-focused
  .checkbox label label:has(input[type=radio][disabled]),
  .is-focused
  .checkbox label label:has(input[type=radio][disabled]):hover,
  .is-focused
  .checkbox label label:has(input[type=radio][disabled]):focus,
  .is-focused
  .checkbox label label:has(input[type=checkbox][disabled]),
  .is-focused
  .checkbox label label:has(input[type=checkbox][disabled]):hover,
  .is-focused
  .checkbox label label:has(input[type=checkbox][disabled]):focus,
  fieldset[disabled]
  .is-focused
  .checkbox label,
  fieldset[disabled]
  .is-focused
  .checkbox label:hover,
  fieldset[disabled]
  .is-focused
  .checkbox label:focus,
  .checkbox-inline label:has(input[type=radio][disabled]),
  .checkbox-inline label:has(input[type=radio][disabled]):hover,
  .checkbox-inline label:has(input[type=radio][disabled]):focus,
  .checkbox-inline label:has(input[type=checkbox][disabled]),
  .checkbox-inline label:has(input[type=checkbox][disabled]):hover,
  .checkbox-inline label:has(input[type=checkbox][disabled]):focus,
  fieldset[disabled]
  .checkbox-inline,
  fieldset[disabled]
  .checkbox-inline:hover,
  fieldset[disabled]
  .checkbox-inline:focus,
  .is-focused
  .checkbox-inline label:has(input[type=radio][disabled]),
  .is-focused
  .checkbox-inline label:has(input[type=radio][disabled]):hover,
  .is-focused
  .checkbox-inline label:has(input[type=radio][disabled]):focus,
  .is-focused
  .checkbox-inline label:has(input[type=checkbox][disabled]),
  .is-focused
  .checkbox-inline label:has(input[type=checkbox][disabled]):hover,
  .is-focused
  .checkbox-inline label:has(input[type=checkbox][disabled]):focus,
  fieldset[disabled]
  .is-focused
  .checkbox-inline,
  fieldset[disabled]
  .is-focused
  .checkbox-inline:hover,
  fieldset[disabled]
  .is-focused
  .checkbox-inline:focus,
  .switch label label:has(input[type=radio][disabled]),
  .switch label label:has(input[type=radio][disabled]):hover,
  .switch label label:has(input[type=radio][disabled]):focus,
  .switch label label:has(input[type=checkbox][disabled]),
  .switch label label:has(input[type=checkbox][disabled]):hover,
  .switch label label:has(input[type=checkbox][disabled]):focus,
  fieldset[disabled]
  .switch label,
  fieldset[disabled]
  .switch label:hover,
  fieldset[disabled]
  .switch label:focus,
  .is-focused
  .switch label label:has(input[type=radio][disabled]),
  .is-focused
  .switch label label:has(input[type=radio][disabled]):hover,
  .is-focused
  .switch label label:has(input[type=radio][disabled]):focus,
  .is-focused
  .switch label label:has(input[type=checkbox][disabled]),
  .is-focused
  .switch label label:has(input[type=checkbox][disabled]):hover,
  .is-focused
  .switch label label:has(input[type=checkbox][disabled]):focus,
  fieldset[disabled]
  .is-focused
  .switch label,
  fieldset[disabled]
  .is-focused
  .switch label:hover,
  fieldset[disabled]
  .is-focused
  .switch label:focus {
    color: rgba(0, 0, 0, 0.26); }

[class^='bmd-label'],
[class*=' bmd-label'] {
  color: rgba(0, 0, 0, 0.26); }

.form-control, .custom-file-control,
.is-focused .form-control,
.is-focused .custom-file-control {
  background-image: linear-gradient(to top, #009688 2px, rgba(0, 150, 136, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

.form-control:invalid, .custom-file-control:invalid {
  background-image: linear-gradient(to top, #d50000 2px, rgba(213, 0, 0, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

.form-control:read-only, .custom-file-control:read-only {
  background-image: linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

fieldset[disabled][disabled] .form-control, fieldset[disabled][disabled] .custom-file-control, .form-control.disabled, .disabled.custom-file-control, .form-control:disabled, .custom-file-control:disabled, .form-control[disabled], [disabled].custom-file-control {
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.26) 0%, rgba(0, 0, 0, 0.26) 30%, transparent 30%, transparent 100%);
  background-repeat: repeat-x;
  background-size: 3px 1px; }

.form-control.form-control-success, .form-control-success.custom-file-control,
.is-focused .form-control.form-control-success,
.is-focused .form-control-success.custom-file-control {
  background-image: linear-gradient(to top, #009688 2px, rgba(0, 150, 136, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg=="; }

.form-control.form-control-warning, .form-control-warning.custom-file-control,
.is-focused .form-control.form-control-warning,
.is-focused .form-control-warning.custom-file-control {
  background-image: linear-gradient(to top, #009688 2px, rgba(0, 150, 136, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+"; }

.form-control.form-control-danger, .form-control-danger.custom-file-control,
.is-focused .form-control.form-control-danger,
.is-focused .form-control-danger.custom-file-control {
  background-image: linear-gradient(to top, #009688 2px, rgba(0, 150, 136, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4="; }

.is-focused .valid-feedback,
.is-focused .valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: rgba(0, 0, 0, 0.26); }

.is-focused .valid-tooltip,
.is-focused .valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(0, 0, 0, 0.8);
  border-radius: .2rem; }

.was-validated .is-focused .form-control:valid, .was-validated .is-focused .custom-file-control:valid, .is-focused .form-control.is-valid, .is-focused .is-valid.custom-file-control, .was-validated
.is-focused .custom-select:valid,
.is-focused .custom-select.is-valid, .was-validated
.is-focused .form-control:valid, .was-validated
.is-focused .custom-file-control:valid,
.is-focused .form-control.is-valid,
.is-focused .is-valid.custom-file-control, .was-validated
.is-focused .custom-select:valid,
.is-focused .custom-select.is-valid {
  border-color: rgba(0, 0, 0, 0.26); }
  .was-validated .is-focused .form-control:valid:focus, .was-validated .is-focused .custom-file-control:valid:focus, .is-focused .form-control.is-valid:focus, .is-focused .is-valid.custom-file-control:focus, .was-validated
  .is-focused .custom-select:valid:focus,
  .is-focused .custom-select.is-valid:focus, .was-validated
  .is-focused .form-control:valid:focus, .was-validated
  .is-focused .custom-file-control:valid:focus,
  .is-focused .form-control.is-valid:focus,
  .is-focused .is-valid.custom-file-control:focus, .was-validated
  .is-focused .custom-select:valid:focus,
  .is-focused .custom-select.is-valid:focus {
    border-color: rgba(0, 0, 0, 0.26);
    box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.25); }
  .was-validated .is-focused .form-control:valid ~ .valid-feedback, .was-validated .is-focused .custom-file-control:valid ~ .valid-feedback,
  .was-validated .is-focused .form-control:valid ~ .valid-tooltip,
  .was-validated .is-focused .custom-file-control:valid ~ .valid-tooltip, .is-focused .form-control.is-valid ~ .valid-feedback, .is-focused .is-valid.custom-file-control ~ .valid-feedback,
  .is-focused .form-control.is-valid ~ .valid-tooltip,
  .is-focused .is-valid.custom-file-control ~ .valid-tooltip, .was-validated
  .is-focused .custom-select:valid ~ .valid-feedback,
  .was-validated
  .is-focused .custom-select:valid ~ .valid-tooltip,
  .is-focused .custom-select.is-valid ~ .valid-feedback,
  .is-focused .custom-select.is-valid ~ .valid-tooltip, .was-validated
  .is-focused .form-control:valid ~ .valid-feedback, .was-validated
  .is-focused .custom-file-control:valid ~ .valid-feedback,
  .was-validated
  .is-focused .form-control:valid ~ .valid-tooltip,
  .was-validated
  .is-focused .custom-file-control:valid ~ .valid-tooltip,
  .is-focused .form-control.is-valid ~ .valid-feedback,
  .is-focused .is-valid.custom-file-control ~ .valid-feedback,
  .is-focused .form-control.is-valid ~ .valid-tooltip,
  .is-focused .is-valid.custom-file-control ~ .valid-tooltip, .was-validated
  .is-focused .custom-select:valid ~ .valid-feedback,
  .was-validated
  .is-focused .custom-select:valid ~ .valid-tooltip,
  .is-focused .custom-select.is-valid ~ .valid-feedback,
  .is-focused .custom-select.is-valid ~ .valid-tooltip {
    display: block; }

.was-validated .is-focused .form-check-input:valid ~ .form-check-label, .is-focused .form-check-input.is-valid ~ .form-check-label, .was-validated
.is-focused .form-check-input:valid ~ .form-check-label,
.is-focused .form-check-input.is-valid ~ .form-check-label {
  color: rgba(0, 0, 0, 0.26); }

.was-validated .is-focused .form-check-input:valid ~ .valid-feedback,
.was-validated .is-focused .form-check-input:valid ~ .valid-tooltip, .is-focused .form-check-input.is-valid ~ .valid-feedback,
.is-focused .form-check-input.is-valid ~ .valid-tooltip, .was-validated
.is-focused .form-check-input:valid ~ .valid-feedback,
.was-validated
.is-focused .form-check-input:valid ~ .valid-tooltip,
.is-focused .form-check-input.is-valid ~ .valid-feedback,
.is-focused .form-check-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .is-focused .custom-control-input:valid ~ .custom-control-label, .is-focused .custom-control-input.is-valid ~ .custom-control-label, .was-validated
.is-focused .custom-control-input:valid ~ .custom-control-label,
.is-focused .custom-control-input.is-valid ~ .custom-control-label {
  color: rgba(0, 0, 0, 0.26); }
  .was-validated .is-focused .custom-control-input:valid ~ .custom-control-label::before, .is-focused .custom-control-input.is-valid ~ .custom-control-label::before, .was-validated
  .is-focused .custom-control-input:valid ~ .custom-control-label::before,
  .is-focused .custom-control-input.is-valid ~ .custom-control-label::before {
    background-color: rgba(64, 64, 64, 0.26); }

.was-validated .is-focused .custom-control-input:valid ~ .valid-feedback,
.was-validated .is-focused .custom-control-input:valid ~ .valid-tooltip, .is-focused .custom-control-input.is-valid ~ .valid-feedback,
.is-focused .custom-control-input.is-valid ~ .valid-tooltip, .was-validated
.is-focused .custom-control-input:valid ~ .valid-feedback,
.was-validated
.is-focused .custom-control-input:valid ~ .valid-tooltip,
.is-focused .custom-control-input.is-valid ~ .valid-feedback,
.is-focused .custom-control-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before, .was-validated
.is-focused .custom-control-input:valid:checked ~ .custom-control-label::before,
.is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  background-color: rgba(26, 26, 26, 0.26); }

.was-validated .is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before, .was-validated
.is-focused .custom-control-input:valid:focus ~ .custom-control-label::before,
.is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(0, 0, 0, 0.25); }

.was-validated .is-focused .custom-file-input:valid ~ .custom-file-label, .is-focused .custom-file-input.is-valid ~ .custom-file-label, .was-validated
.is-focused .custom-file-input:valid ~ .custom-file-label,
.is-focused .custom-file-input.is-valid ~ .custom-file-label {
  border-color: rgba(0, 0, 0, 0.26); }
  .was-validated .is-focused .custom-file-input:valid ~ .custom-file-label::before, .is-focused .custom-file-input.is-valid ~ .custom-file-label::before, .was-validated
  .is-focused .custom-file-input:valid ~ .custom-file-label::before,
  .is-focused .custom-file-input.is-valid ~ .custom-file-label::before {
    border-color: inherit; }

.was-validated .is-focused .custom-file-input:valid ~ .valid-feedback,
.was-validated .is-focused .custom-file-input:valid ~ .valid-tooltip, .is-focused .custom-file-input.is-valid ~ .valid-feedback,
.is-focused .custom-file-input.is-valid ~ .valid-tooltip, .was-validated
.is-focused .custom-file-input:valid ~ .valid-feedback,
.was-validated
.is-focused .custom-file-input:valid ~ .valid-tooltip,
.is-focused .custom-file-input.is-valid ~ .valid-feedback,
.is-focused .custom-file-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .is-focused .custom-file-input:valid:focus ~ .custom-file-label, .is-focused .custom-file-input.is-valid:focus ~ .custom-file-label, .was-validated
.is-focused .custom-file-input:valid:focus ~ .custom-file-label,
.is-focused .custom-file-input.is-valid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.25); }

.is-focused [class^='bmd-label'],
.is-focused [class*=' bmd-label'],
.is-focused [class^='bmd-label'],
.is-focused [class*=' bmd-label'] {
  color: #009688; }

.is-focused .bmd-label-placeholder,
.is-focused .bmd-label-placeholder {
  color: rgba(0, 0, 0, 0.26); }

.is-focused .form-control, .is-focused .custom-file-control,
.is-focused .form-control,
.is-focused .custom-file-control {
  border-color: rgba(0, 0, 0, 0.26); }

.is-focused .bmd-help,
.is-focused .bmd-help {
  color: rgba(0, 0, 0, 0.54); }

.has-success [class^='bmd-label'],
.has-success [class*=' bmd-label'] {
  color: #4caf50; }

.has-success .form-control, .has-success .custom-file-control,
.is-focused .has-success .form-control,
.is-focused .has-success .custom-file-control {
  background-image: linear-gradient(to top, #4caf50 2px, rgba(76, 175, 80, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

.has-success .form-control:invalid, .has-success .custom-file-control:invalid {
  background-image: linear-gradient(to top, #d50000 2px, rgba(213, 0, 0, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

.has-success .form-control:read-only, .has-success .custom-file-control:read-only {
  background-image: linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

fieldset[disabled][disabled] .has-success .form-control, fieldset[disabled][disabled] .has-success .custom-file-control, .has-success .form-control.disabled, .has-success .disabled.custom-file-control, .has-success .form-control:disabled, .has-success .custom-file-control:disabled, .has-success .form-control[disabled], .has-success [disabled].custom-file-control {
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.26) 0%, rgba(0, 0, 0, 0.26) 30%, transparent 30%, transparent 100%);
  background-repeat: repeat-x;
  background-size: 3px 1px; }

.has-success .form-control.form-control-success, .has-success .form-control-success.custom-file-control,
.is-focused .has-success .form-control.form-control-success,
.is-focused .has-success .form-control-success.custom-file-control {
  background-image: linear-gradient(to top, #4caf50 2px, rgba(76, 175, 80, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg=="; }

.has-success .form-control.form-control-warning, .has-success .form-control-warning.custom-file-control,
.is-focused .has-success .form-control.form-control-warning,
.is-focused .has-success .form-control-warning.custom-file-control {
  background-image: linear-gradient(to top, #4caf50 2px, rgba(76, 175, 80, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+"; }

.has-success .form-control.form-control-danger, .has-success .form-control-danger.custom-file-control,
.is-focused .has-success .form-control.form-control-danger,
.is-focused .has-success .form-control-danger.custom-file-control {
  background-image: linear-gradient(to top, #4caf50 2px, rgba(76, 175, 80, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4="; }

.has-success .is-focused .valid-feedback, .has-success.is-focused .valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #4caf50; }

.has-success .is-focused .valid-tooltip, .has-success.is-focused .valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(76, 175, 80, 0.8);
  border-radius: .2rem; }

.was-validated .has-success .is-focused .form-control:valid, .was-validated .has-success .is-focused .custom-file-control:valid, .has-success .is-focused .form-control.is-valid, .has-success .is-focused .is-valid.custom-file-control, .was-validated
.has-success .is-focused .custom-select:valid,
.has-success .is-focused .custom-select.is-valid, .was-validated .has-success.is-focused .form-control:valid, .was-validated .has-success.is-focused .custom-file-control:valid, .has-success.is-focused .form-control.is-valid, .has-success.is-focused .is-valid.custom-file-control, .was-validated
.has-success.is-focused .custom-select:valid,
.has-success.is-focused .custom-select.is-valid {
  border-color: #4caf50; }
  .was-validated .has-success .is-focused .form-control:valid:focus, .was-validated .has-success .is-focused .custom-file-control:valid:focus, .has-success .is-focused .form-control.is-valid:focus, .has-success .is-focused .is-valid.custom-file-control:focus, .was-validated
  .has-success .is-focused .custom-select:valid:focus,
  .has-success .is-focused .custom-select.is-valid:focus, .was-validated .has-success.is-focused .form-control:valid:focus, .was-validated .has-success.is-focused .custom-file-control:valid:focus, .has-success.is-focused .form-control.is-valid:focus, .has-success.is-focused .is-valid.custom-file-control:focus, .was-validated
  .has-success.is-focused .custom-select:valid:focus,
  .has-success.is-focused .custom-select.is-valid:focus {
    border-color: #4caf50;
    box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25); }
  .was-validated .has-success .is-focused .form-control:valid ~ .valid-feedback, .was-validated .has-success .is-focused .custom-file-control:valid ~ .valid-feedback,
  .was-validated .has-success .is-focused .form-control:valid ~ .valid-tooltip,
  .was-validated .has-success .is-focused .custom-file-control:valid ~ .valid-tooltip, .has-success .is-focused .form-control.is-valid ~ .valid-feedback, .has-success .is-focused .is-valid.custom-file-control ~ .valid-feedback,
  .has-success .is-focused .form-control.is-valid ~ .valid-tooltip,
  .has-success .is-focused .is-valid.custom-file-control ~ .valid-tooltip, .was-validated
  .has-success .is-focused .custom-select:valid ~ .valid-feedback,
  .was-validated
  .has-success .is-focused .custom-select:valid ~ .valid-tooltip,
  .has-success .is-focused .custom-select.is-valid ~ .valid-feedback,
  .has-success .is-focused .custom-select.is-valid ~ .valid-tooltip, .was-validated .has-success.is-focused .form-control:valid ~ .valid-feedback, .was-validated .has-success.is-focused .custom-file-control:valid ~ .valid-feedback,
  .was-validated .has-success.is-focused .form-control:valid ~ .valid-tooltip,
  .was-validated .has-success.is-focused .custom-file-control:valid ~ .valid-tooltip, .has-success.is-focused .form-control.is-valid ~ .valid-feedback, .has-success.is-focused .is-valid.custom-file-control ~ .valid-feedback,
  .has-success.is-focused .form-control.is-valid ~ .valid-tooltip,
  .has-success.is-focused .is-valid.custom-file-control ~ .valid-tooltip, .was-validated
  .has-success.is-focused .custom-select:valid ~ .valid-feedback,
  .was-validated
  .has-success.is-focused .custom-select:valid ~ .valid-tooltip,
  .has-success.is-focused .custom-select.is-valid ~ .valid-feedback,
  .has-success.is-focused .custom-select.is-valid ~ .valid-tooltip {
    display: block; }

.was-validated .has-success .is-focused .form-check-input:valid ~ .form-check-label, .has-success .is-focused .form-check-input.is-valid ~ .form-check-label, .was-validated .has-success.is-focused .form-check-input:valid ~ .form-check-label, .has-success.is-focused .form-check-input.is-valid ~ .form-check-label {
  color: #4caf50; }

.was-validated .has-success .is-focused .form-check-input:valid ~ .valid-feedback,
.was-validated .has-success .is-focused .form-check-input:valid ~ .valid-tooltip, .has-success .is-focused .form-check-input.is-valid ~ .valid-feedback,
.has-success .is-focused .form-check-input.is-valid ~ .valid-tooltip, .was-validated .has-success.is-focused .form-check-input:valid ~ .valid-feedback,
.was-validated .has-success.is-focused .form-check-input:valid ~ .valid-tooltip, .has-success.is-focused .form-check-input.is-valid ~ .valid-feedback,
.has-success.is-focused .form-check-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .has-success .is-focused .custom-control-input:valid ~ .custom-control-label, .has-success .is-focused .custom-control-input.is-valid ~ .custom-control-label, .was-validated .has-success.is-focused .custom-control-input:valid ~ .custom-control-label, .has-success.is-focused .custom-control-input.is-valid ~ .custom-control-label {
  color: #4caf50; }
  .was-validated .has-success .is-focused .custom-control-input:valid ~ .custom-control-label::before, .has-success .is-focused .custom-control-input.is-valid ~ .custom-control-label::before, .was-validated .has-success.is-focused .custom-control-input:valid ~ .custom-control-label::before, .has-success.is-focused .custom-control-input.is-valid ~ .custom-control-label::before {
    background-color: #a3d7a5; }

.was-validated .has-success .is-focused .custom-control-input:valid ~ .valid-feedback,
.was-validated .has-success .is-focused .custom-control-input:valid ~ .valid-tooltip, .has-success .is-focused .custom-control-input.is-valid ~ .valid-feedback,
.has-success .is-focused .custom-control-input.is-valid ~ .valid-tooltip, .was-validated .has-success.is-focused .custom-control-input:valid ~ .valid-feedback,
.was-validated .has-success.is-focused .custom-control-input:valid ~ .valid-tooltip, .has-success.is-focused .custom-control-input.is-valid ~ .valid-feedback,
.has-success.is-focused .custom-control-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .has-success .is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .has-success .is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before, .was-validated .has-success.is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .has-success.is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  background-color: #6ec071; }

.was-validated .has-success .is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .has-success .is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before, .was-validated .has-success.is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .has-success.is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(76, 175, 80, 0.25); }

.was-validated .has-success .is-focused .custom-file-input:valid ~ .custom-file-label, .has-success .is-focused .custom-file-input.is-valid ~ .custom-file-label, .was-validated .has-success.is-focused .custom-file-input:valid ~ .custom-file-label, .has-success.is-focused .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #4caf50; }
  .was-validated .has-success .is-focused .custom-file-input:valid ~ .custom-file-label::before, .has-success .is-focused .custom-file-input.is-valid ~ .custom-file-label::before, .was-validated .has-success.is-focused .custom-file-input:valid ~ .custom-file-label::before, .has-success.is-focused .custom-file-input.is-valid ~ .custom-file-label::before {
    border-color: inherit; }

.was-validated .has-success .is-focused .custom-file-input:valid ~ .valid-feedback,
.was-validated .has-success .is-focused .custom-file-input:valid ~ .valid-tooltip, .has-success .is-focused .custom-file-input.is-valid ~ .valid-feedback,
.has-success .is-focused .custom-file-input.is-valid ~ .valid-tooltip, .was-validated .has-success.is-focused .custom-file-input:valid ~ .valid-feedback,
.was-validated .has-success.is-focused .custom-file-input:valid ~ .valid-tooltip, .has-success.is-focused .custom-file-input.is-valid ~ .valid-feedback,
.has-success.is-focused .custom-file-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .has-success .is-focused .custom-file-input:valid:focus ~ .custom-file-label, .has-success .is-focused .custom-file-input.is-valid:focus ~ .custom-file-label, .was-validated .has-success.is-focused .custom-file-input:valid:focus ~ .custom-file-label, .has-success.is-focused .custom-file-input.is-valid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25); }

.has-success .is-focused [class^='bmd-label'],
.has-success .is-focused [class*=' bmd-label'], .has-success.is-focused [class^='bmd-label'],
.has-success.is-focused [class*=' bmd-label'] {
  color: #4caf50; }

.has-success .is-focused .bmd-label-placeholder, .has-success.is-focused .bmd-label-placeholder {
  color: #4caf50; }

.has-success .is-focused .form-control, .has-success .is-focused .custom-file-control, .has-success.is-focused .form-control, .has-success.is-focused .custom-file-control {
  border-color: #4caf50; }

.has-success .is-focused .bmd-help, .has-success.is-focused .bmd-help {
  color: rgba(0, 0, 0, 0.54); }

.has-info [class^='bmd-label'],
.has-info [class*=' bmd-label'] {
  color: #03a9f4; }

.has-info .form-control, .has-info .custom-file-control,
.is-focused .has-info .form-control,
.is-focused .has-info .custom-file-control {
  background-image: linear-gradient(to top, #03a9f4 2px, rgba(3, 169, 244, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

.has-info .form-control:invalid, .has-info .custom-file-control:invalid {
  background-image: linear-gradient(to top, #d50000 2px, rgba(213, 0, 0, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

.has-info .form-control:read-only, .has-info .custom-file-control:read-only {
  background-image: linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

fieldset[disabled][disabled] .has-info .form-control, fieldset[disabled][disabled] .has-info .custom-file-control, .has-info .form-control.disabled, .has-info .disabled.custom-file-control, .has-info .form-control:disabled, .has-info .custom-file-control:disabled, .has-info .form-control[disabled], .has-info [disabled].custom-file-control {
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.26) 0%, rgba(0, 0, 0, 0.26) 30%, transparent 30%, transparent 100%);
  background-repeat: repeat-x;
  background-size: 3px 1px; }

.has-info .form-control.form-control-success, .has-info .form-control-success.custom-file-control,
.is-focused .has-info .form-control.form-control-success,
.is-focused .has-info .form-control-success.custom-file-control {
  background-image: linear-gradient(to top, #03a9f4 2px, rgba(3, 169, 244, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg=="; }

.has-info .form-control.form-control-warning, .has-info .form-control-warning.custom-file-control,
.is-focused .has-info .form-control.form-control-warning,
.is-focused .has-info .form-control-warning.custom-file-control {
  background-image: linear-gradient(to top, #03a9f4 2px, rgba(3, 169, 244, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+"; }

.has-info .form-control.form-control-danger, .has-info .form-control-danger.custom-file-control,
.is-focused .has-info .form-control.form-control-danger,
.is-focused .has-info .form-control-danger.custom-file-control {
  background-image: linear-gradient(to top, #03a9f4 2px, rgba(3, 169, 244, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4="; }

.has-info .is-focused .valid-feedback, .has-info.is-focused .valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #03a9f4; }

.has-info .is-focused .valid-tooltip, .has-info.is-focused .valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(3, 169, 244, 0.8);
  border-radius: .2rem; }

.was-validated .has-info .is-focused .form-control:valid, .was-validated .has-info .is-focused .custom-file-control:valid, .has-info .is-focused .form-control.is-valid, .has-info .is-focused .is-valid.custom-file-control, .was-validated
.has-info .is-focused .custom-select:valid,
.has-info .is-focused .custom-select.is-valid, .was-validated .has-info.is-focused .form-control:valid, .was-validated .has-info.is-focused .custom-file-control:valid, .has-info.is-focused .form-control.is-valid, .has-info.is-focused .is-valid.custom-file-control, .was-validated
.has-info.is-focused .custom-select:valid,
.has-info.is-focused .custom-select.is-valid {
  border-color: #03a9f4; }
  .was-validated .has-info .is-focused .form-control:valid:focus, .was-validated .has-info .is-focused .custom-file-control:valid:focus, .has-info .is-focused .form-control.is-valid:focus, .has-info .is-focused .is-valid.custom-file-control:focus, .was-validated
  .has-info .is-focused .custom-select:valid:focus,
  .has-info .is-focused .custom-select.is-valid:focus, .was-validated .has-info.is-focused .form-control:valid:focus, .was-validated .has-info.is-focused .custom-file-control:valid:focus, .has-info.is-focused .form-control.is-valid:focus, .has-info.is-focused .is-valid.custom-file-control:focus, .was-validated
  .has-info.is-focused .custom-select:valid:focus,
  .has-info.is-focused .custom-select.is-valid:focus {
    border-color: #03a9f4;
    box-shadow: 0 0 0 0.2rem rgba(3, 169, 244, 0.25); }
  .was-validated .has-info .is-focused .form-control:valid ~ .valid-feedback, .was-validated .has-info .is-focused .custom-file-control:valid ~ .valid-feedback,
  .was-validated .has-info .is-focused .form-control:valid ~ .valid-tooltip,
  .was-validated .has-info .is-focused .custom-file-control:valid ~ .valid-tooltip, .has-info .is-focused .form-control.is-valid ~ .valid-feedback, .has-info .is-focused .is-valid.custom-file-control ~ .valid-feedback,
  .has-info .is-focused .form-control.is-valid ~ .valid-tooltip,
  .has-info .is-focused .is-valid.custom-file-control ~ .valid-tooltip, .was-validated
  .has-info .is-focused .custom-select:valid ~ .valid-feedback,
  .was-validated
  .has-info .is-focused .custom-select:valid ~ .valid-tooltip,
  .has-info .is-focused .custom-select.is-valid ~ .valid-feedback,
  .has-info .is-focused .custom-select.is-valid ~ .valid-tooltip, .was-validated .has-info.is-focused .form-control:valid ~ .valid-feedback, .was-validated .has-info.is-focused .custom-file-control:valid ~ .valid-feedback,
  .was-validated .has-info.is-focused .form-control:valid ~ .valid-tooltip,
  .was-validated .has-info.is-focused .custom-file-control:valid ~ .valid-tooltip, .has-info.is-focused .form-control.is-valid ~ .valid-feedback, .has-info.is-focused .is-valid.custom-file-control ~ .valid-feedback,
  .has-info.is-focused .form-control.is-valid ~ .valid-tooltip,
  .has-info.is-focused .is-valid.custom-file-control ~ .valid-tooltip, .was-validated
  .has-info.is-focused .custom-select:valid ~ .valid-feedback,
  .was-validated
  .has-info.is-focused .custom-select:valid ~ .valid-tooltip,
  .has-info.is-focused .custom-select.is-valid ~ .valid-feedback,
  .has-info.is-focused .custom-select.is-valid ~ .valid-tooltip {
    display: block; }

.was-validated .has-info .is-focused .form-check-input:valid ~ .form-check-label, .has-info .is-focused .form-check-input.is-valid ~ .form-check-label, .was-validated .has-info.is-focused .form-check-input:valid ~ .form-check-label, .has-info.is-focused .form-check-input.is-valid ~ .form-check-label {
  color: #03a9f4; }

.was-validated .has-info .is-focused .form-check-input:valid ~ .valid-feedback,
.was-validated .has-info .is-focused .form-check-input:valid ~ .valid-tooltip, .has-info .is-focused .form-check-input.is-valid ~ .valid-feedback,
.has-info .is-focused .form-check-input.is-valid ~ .valid-tooltip, .was-validated .has-info.is-focused .form-check-input:valid ~ .valid-feedback,
.was-validated .has-info.is-focused .form-check-input:valid ~ .valid-tooltip, .has-info.is-focused .form-check-input.is-valid ~ .valid-feedback,
.has-info.is-focused .form-check-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .has-info .is-focused .custom-control-input:valid ~ .custom-control-label, .has-info .is-focused .custom-control-input.is-valid ~ .custom-control-label, .was-validated .has-info.is-focused .custom-control-input:valid ~ .custom-control-label, .has-info.is-focused .custom-control-input.is-valid ~ .custom-control-label {
  color: #03a9f4; }
  .was-validated .has-info .is-focused .custom-control-input:valid ~ .custom-control-label::before, .has-info .is-focused .custom-control-input.is-valid ~ .custom-control-label::before, .was-validated .has-info.is-focused .custom-control-input:valid ~ .custom-control-label::before, .has-info.is-focused .custom-control-input.is-valid ~ .custom-control-label::before {
    background-color: #79d4fd; }

.was-validated .has-info .is-focused .custom-control-input:valid ~ .valid-feedback,
.was-validated .has-info .is-focused .custom-control-input:valid ~ .valid-tooltip, .has-info .is-focused .custom-control-input.is-valid ~ .valid-feedback,
.has-info .is-focused .custom-control-input.is-valid ~ .valid-tooltip, .was-validated .has-info.is-focused .custom-control-input:valid ~ .valid-feedback,
.was-validated .has-info.is-focused .custom-control-input:valid ~ .valid-tooltip, .has-info.is-focused .custom-control-input.is-valid ~ .valid-feedback,
.has-info.is-focused .custom-control-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .has-info .is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .has-info .is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before, .was-validated .has-info.is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .has-info.is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  background-color: #2ebcfc; }

.was-validated .has-info .is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .has-info .is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before, .was-validated .has-info.is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .has-info.is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(3, 169, 244, 0.25); }

.was-validated .has-info .is-focused .custom-file-input:valid ~ .custom-file-label, .has-info .is-focused .custom-file-input.is-valid ~ .custom-file-label, .was-validated .has-info.is-focused .custom-file-input:valid ~ .custom-file-label, .has-info.is-focused .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #03a9f4; }
  .was-validated .has-info .is-focused .custom-file-input:valid ~ .custom-file-label::before, .has-info .is-focused .custom-file-input.is-valid ~ .custom-file-label::before, .was-validated .has-info.is-focused .custom-file-input:valid ~ .custom-file-label::before, .has-info.is-focused .custom-file-input.is-valid ~ .custom-file-label::before {
    border-color: inherit; }

.was-validated .has-info .is-focused .custom-file-input:valid ~ .valid-feedback,
.was-validated .has-info .is-focused .custom-file-input:valid ~ .valid-tooltip, .has-info .is-focused .custom-file-input.is-valid ~ .valid-feedback,
.has-info .is-focused .custom-file-input.is-valid ~ .valid-tooltip, .was-validated .has-info.is-focused .custom-file-input:valid ~ .valid-feedback,
.was-validated .has-info.is-focused .custom-file-input:valid ~ .valid-tooltip, .has-info.is-focused .custom-file-input.is-valid ~ .valid-feedback,
.has-info.is-focused .custom-file-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .has-info .is-focused .custom-file-input:valid:focus ~ .custom-file-label, .has-info .is-focused .custom-file-input.is-valid:focus ~ .custom-file-label, .was-validated .has-info.is-focused .custom-file-input:valid:focus ~ .custom-file-label, .has-info.is-focused .custom-file-input.is-valid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(3, 169, 244, 0.25); }

.has-info .is-focused [class^='bmd-label'],
.has-info .is-focused [class*=' bmd-label'], .has-info.is-focused [class^='bmd-label'],
.has-info.is-focused [class*=' bmd-label'] {
  color: #03a9f4; }

.has-info .is-focused .bmd-label-placeholder, .has-info.is-focused .bmd-label-placeholder {
  color: #03a9f4; }

.has-info .is-focused .form-control, .has-info .is-focused .custom-file-control, .has-info.is-focused .form-control, .has-info.is-focused .custom-file-control {
  border-color: #03a9f4; }

.has-info .is-focused .bmd-help, .has-info.is-focused .bmd-help {
  color: rgba(0, 0, 0, 0.54); }

.has-warning [class^='bmd-label'],
.has-warning [class*=' bmd-label'] {
  color: #ff5722; }

.has-warning .form-control, .has-warning .custom-file-control,
.is-focused .has-warning .form-control,
.is-focused .has-warning .custom-file-control {
  background-image: linear-gradient(to top, #ff5722 2px, rgba(255, 87, 34, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

.has-warning .form-control:invalid, .has-warning .custom-file-control:invalid {
  background-image: linear-gradient(to top, #d50000 2px, rgba(213, 0, 0, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

.has-warning .form-control:read-only, .has-warning .custom-file-control:read-only {
  background-image: linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

fieldset[disabled][disabled] .has-warning .form-control, fieldset[disabled][disabled] .has-warning .custom-file-control, .has-warning .form-control.disabled, .has-warning .disabled.custom-file-control, .has-warning .form-control:disabled, .has-warning .custom-file-control:disabled, .has-warning .form-control[disabled], .has-warning [disabled].custom-file-control {
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.26) 0%, rgba(0, 0, 0, 0.26) 30%, transparent 30%, transparent 100%);
  background-repeat: repeat-x;
  background-size: 3px 1px; }

.has-warning .form-control.form-control-success, .has-warning .form-control-success.custom-file-control,
.is-focused .has-warning .form-control.form-control-success,
.is-focused .has-warning .form-control-success.custom-file-control {
  background-image: linear-gradient(to top, #ff5722 2px, rgba(255, 87, 34, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg=="; }

.has-warning .form-control.form-control-warning, .has-warning .form-control-warning.custom-file-control,
.is-focused .has-warning .form-control.form-control-warning,
.is-focused .has-warning .form-control-warning.custom-file-control {
  background-image: linear-gradient(to top, #ff5722 2px, rgba(255, 87, 34, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+"; }

.has-warning .form-control.form-control-danger, .has-warning .form-control-danger.custom-file-control,
.is-focused .has-warning .form-control.form-control-danger,
.is-focused .has-warning .form-control-danger.custom-file-control {
  background-image: linear-gradient(to top, #ff5722 2px, rgba(255, 87, 34, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4="; }

.has-warning .is-focused .valid-feedback, .has-warning.is-focused .valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #ff5722; }

.has-warning .is-focused .valid-tooltip, .has-warning.is-focused .valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(255, 87, 34, 0.8);
  border-radius: .2rem; }

.was-validated .has-warning .is-focused .form-control:valid, .was-validated .has-warning .is-focused .custom-file-control:valid, .has-warning .is-focused .form-control.is-valid, .has-warning .is-focused .is-valid.custom-file-control, .was-validated
.has-warning .is-focused .custom-select:valid,
.has-warning .is-focused .custom-select.is-valid, .was-validated .has-warning.is-focused .form-control:valid, .was-validated .has-warning.is-focused .custom-file-control:valid, .has-warning.is-focused .form-control.is-valid, .has-warning.is-focused .is-valid.custom-file-control, .was-validated
.has-warning.is-focused .custom-select:valid,
.has-warning.is-focused .custom-select.is-valid {
  border-color: #ff5722; }
  .was-validated .has-warning .is-focused .form-control:valid:focus, .was-validated .has-warning .is-focused .custom-file-control:valid:focus, .has-warning .is-focused .form-control.is-valid:focus, .has-warning .is-focused .is-valid.custom-file-control:focus, .was-validated
  .has-warning .is-focused .custom-select:valid:focus,
  .has-warning .is-focused .custom-select.is-valid:focus, .was-validated .has-warning.is-focused .form-control:valid:focus, .was-validated .has-warning.is-focused .custom-file-control:valid:focus, .has-warning.is-focused .form-control.is-valid:focus, .has-warning.is-focused .is-valid.custom-file-control:focus, .was-validated
  .has-warning.is-focused .custom-select:valid:focus,
  .has-warning.is-focused .custom-select.is-valid:focus {
    border-color: #ff5722;
    box-shadow: 0 0 0 0.2rem rgba(255, 87, 34, 0.25); }
  .was-validated .has-warning .is-focused .form-control:valid ~ .valid-feedback, .was-validated .has-warning .is-focused .custom-file-control:valid ~ .valid-feedback,
  .was-validated .has-warning .is-focused .form-control:valid ~ .valid-tooltip,
  .was-validated .has-warning .is-focused .custom-file-control:valid ~ .valid-tooltip, .has-warning .is-focused .form-control.is-valid ~ .valid-feedback, .has-warning .is-focused .is-valid.custom-file-control ~ .valid-feedback,
  .has-warning .is-focused .form-control.is-valid ~ .valid-tooltip,
  .has-warning .is-focused .is-valid.custom-file-control ~ .valid-tooltip, .was-validated
  .has-warning .is-focused .custom-select:valid ~ .valid-feedback,
  .was-validated
  .has-warning .is-focused .custom-select:valid ~ .valid-tooltip,
  .has-warning .is-focused .custom-select.is-valid ~ .valid-feedback,
  .has-warning .is-focused .custom-select.is-valid ~ .valid-tooltip, .was-validated .has-warning.is-focused .form-control:valid ~ .valid-feedback, .was-validated .has-warning.is-focused .custom-file-control:valid ~ .valid-feedback,
  .was-validated .has-warning.is-focused .form-control:valid ~ .valid-tooltip,
  .was-validated .has-warning.is-focused .custom-file-control:valid ~ .valid-tooltip, .has-warning.is-focused .form-control.is-valid ~ .valid-feedback, .has-warning.is-focused .is-valid.custom-file-control ~ .valid-feedback,
  .has-warning.is-focused .form-control.is-valid ~ .valid-tooltip,
  .has-warning.is-focused .is-valid.custom-file-control ~ .valid-tooltip, .was-validated
  .has-warning.is-focused .custom-select:valid ~ .valid-feedback,
  .was-validated
  .has-warning.is-focused .custom-select:valid ~ .valid-tooltip,
  .has-warning.is-focused .custom-select.is-valid ~ .valid-feedback,
  .has-warning.is-focused .custom-select.is-valid ~ .valid-tooltip {
    display: block; }

.was-validated .has-warning .is-focused .form-check-input:valid ~ .form-check-label, .has-warning .is-focused .form-check-input.is-valid ~ .form-check-label, .was-validated .has-warning.is-focused .form-check-input:valid ~ .form-check-label, .has-warning.is-focused .form-check-input.is-valid ~ .form-check-label {
  color: #ff5722; }

.was-validated .has-warning .is-focused .form-check-input:valid ~ .valid-feedback,
.was-validated .has-warning .is-focused .form-check-input:valid ~ .valid-tooltip, .has-warning .is-focused .form-check-input.is-valid ~ .valid-feedback,
.has-warning .is-focused .form-check-input.is-valid ~ .valid-tooltip, .was-validated .has-warning.is-focused .form-check-input:valid ~ .valid-feedback,
.was-validated .has-warning.is-focused .form-check-input:valid ~ .valid-tooltip, .has-warning.is-focused .form-check-input.is-valid ~ .valid-feedback,
.has-warning.is-focused .form-check-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .has-warning .is-focused .custom-control-input:valid ~ .custom-control-label, .has-warning .is-focused .custom-control-input.is-valid ~ .custom-control-label, .was-validated .has-warning.is-focused .custom-control-input:valid ~ .custom-control-label, .has-warning.is-focused .custom-control-input.is-valid ~ .custom-control-label {
  color: #ff5722; }
  .was-validated .has-warning .is-focused .custom-control-input:valid ~ .custom-control-label::before, .has-warning .is-focused .custom-control-input.is-valid ~ .custom-control-label::before, .was-validated .has-warning.is-focused .custom-control-input:valid ~ .custom-control-label::before, .has-warning.is-focused .custom-control-input.is-valid ~ .custom-control-label::before {
    background-color: #ffb8a2; }

.was-validated .has-warning .is-focused .custom-control-input:valid ~ .valid-feedback,
.was-validated .has-warning .is-focused .custom-control-input:valid ~ .valid-tooltip, .has-warning .is-focused .custom-control-input.is-valid ~ .valid-feedback,
.has-warning .is-focused .custom-control-input.is-valid ~ .valid-tooltip, .was-validated .has-warning.is-focused .custom-control-input:valid ~ .valid-feedback,
.was-validated .has-warning.is-focused .custom-control-input:valid ~ .valid-tooltip, .has-warning.is-focused .custom-control-input.is-valid ~ .valid-feedback,
.has-warning.is-focused .custom-control-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .has-warning .is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .has-warning .is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before, .was-validated .has-warning.is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .has-warning.is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  background-color: #ff7e55; }

.was-validated .has-warning .is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .has-warning .is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before, .was-validated .has-warning.is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .has-warning.is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(255, 87, 34, 0.25); }

.was-validated .has-warning .is-focused .custom-file-input:valid ~ .custom-file-label, .has-warning .is-focused .custom-file-input.is-valid ~ .custom-file-label, .was-validated .has-warning.is-focused .custom-file-input:valid ~ .custom-file-label, .has-warning.is-focused .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #ff5722; }
  .was-validated .has-warning .is-focused .custom-file-input:valid ~ .custom-file-label::before, .has-warning .is-focused .custom-file-input.is-valid ~ .custom-file-label::before, .was-validated .has-warning.is-focused .custom-file-input:valid ~ .custom-file-label::before, .has-warning.is-focused .custom-file-input.is-valid ~ .custom-file-label::before {
    border-color: inherit; }

.was-validated .has-warning .is-focused .custom-file-input:valid ~ .valid-feedback,
.was-validated .has-warning .is-focused .custom-file-input:valid ~ .valid-tooltip, .has-warning .is-focused .custom-file-input.is-valid ~ .valid-feedback,
.has-warning .is-focused .custom-file-input.is-valid ~ .valid-tooltip, .was-validated .has-warning.is-focused .custom-file-input:valid ~ .valid-feedback,
.was-validated .has-warning.is-focused .custom-file-input:valid ~ .valid-tooltip, .has-warning.is-focused .custom-file-input.is-valid ~ .valid-feedback,
.has-warning.is-focused .custom-file-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .has-warning .is-focused .custom-file-input:valid:focus ~ .custom-file-label, .has-warning .is-focused .custom-file-input.is-valid:focus ~ .custom-file-label, .was-validated .has-warning.is-focused .custom-file-input:valid:focus ~ .custom-file-label, .has-warning.is-focused .custom-file-input.is-valid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(255, 87, 34, 0.25); }

.has-warning .is-focused [class^='bmd-label'],
.has-warning .is-focused [class*=' bmd-label'], .has-warning.is-focused [class^='bmd-label'],
.has-warning.is-focused [class*=' bmd-label'] {
  color: #ff5722; }

.has-warning .is-focused .bmd-label-placeholder, .has-warning.is-focused .bmd-label-placeholder {
  color: #ff5722; }

.has-warning .is-focused .form-control, .has-warning .is-focused .custom-file-control, .has-warning.is-focused .form-control, .has-warning.is-focused .custom-file-control {
  border-color: #ff5722; }

.has-warning .is-focused .bmd-help, .has-warning.is-focused .bmd-help {
  color: rgba(0, 0, 0, 0.54); }

.has-danger [class^='bmd-label'],
.has-danger [class*=' bmd-label'] {
  color: #f44336; }

.has-danger .form-control, .has-danger .custom-file-control,
.is-focused .has-danger .form-control,
.is-focused .has-danger .custom-file-control {
  background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

.has-danger .form-control:invalid, .has-danger .custom-file-control:invalid {
  background-image: linear-gradient(to top, #d50000 2px, rgba(213, 0, 0, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

.has-danger .form-control:read-only, .has-danger .custom-file-control:read-only {
  background-image: linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

fieldset[disabled][disabled] .has-danger .form-control, fieldset[disabled][disabled] .has-danger .custom-file-control, .has-danger .form-control.disabled, .has-danger .disabled.custom-file-control, .has-danger .form-control:disabled, .has-danger .custom-file-control:disabled, .has-danger .form-control[disabled], .has-danger [disabled].custom-file-control {
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.26) 0%, rgba(0, 0, 0, 0.26) 30%, transparent 30%, transparent 100%);
  background-repeat: repeat-x;
  background-size: 3px 1px; }

.has-danger .form-control.form-control-success, .has-danger .form-control-success.custom-file-control,
.is-focused .has-danger .form-control.form-control-success,
.is-focused .has-danger .form-control-success.custom-file-control {
  background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg=="; }

.has-danger .form-control.form-control-warning, .has-danger .form-control-warning.custom-file-control,
.is-focused .has-danger .form-control.form-control-warning,
.is-focused .has-danger .form-control-warning.custom-file-control {
  background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+"; }

.has-danger .form-control.form-control-danger, .has-danger .form-control-danger.custom-file-control,
.is-focused .has-danger .form-control.form-control-danger,
.is-focused .has-danger .form-control-danger.custom-file-control {
  background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4="; }

.has-danger .is-focused .valid-feedback, .has-danger.is-focused .valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #f44336; }

.has-danger .is-focused .valid-tooltip, .has-danger.is-focused .valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(244, 67, 54, 0.8);
  border-radius: .2rem; }

.was-validated .has-danger .is-focused .form-control:valid, .was-validated .has-danger .is-focused .custom-file-control:valid, .has-danger .is-focused .form-control.is-valid, .has-danger .is-focused .is-valid.custom-file-control, .was-validated
.has-danger .is-focused .custom-select:valid,
.has-danger .is-focused .custom-select.is-valid, .was-validated .has-danger.is-focused .form-control:valid, .was-validated .has-danger.is-focused .custom-file-control:valid, .has-danger.is-focused .form-control.is-valid, .has-danger.is-focused .is-valid.custom-file-control, .was-validated
.has-danger.is-focused .custom-select:valid,
.has-danger.is-focused .custom-select.is-valid {
  border-color: #f44336; }
  .was-validated .has-danger .is-focused .form-control:valid:focus, .was-validated .has-danger .is-focused .custom-file-control:valid:focus, .has-danger .is-focused .form-control.is-valid:focus, .has-danger .is-focused .is-valid.custom-file-control:focus, .was-validated
  .has-danger .is-focused .custom-select:valid:focus,
  .has-danger .is-focused .custom-select.is-valid:focus, .was-validated .has-danger.is-focused .form-control:valid:focus, .was-validated .has-danger.is-focused .custom-file-control:valid:focus, .has-danger.is-focused .form-control.is-valid:focus, .has-danger.is-focused .is-valid.custom-file-control:focus, .was-validated
  .has-danger.is-focused .custom-select:valid:focus,
  .has-danger.is-focused .custom-select.is-valid:focus {
    border-color: #f44336;
    box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.25); }
  .was-validated .has-danger .is-focused .form-control:valid ~ .valid-feedback, .was-validated .has-danger .is-focused .custom-file-control:valid ~ .valid-feedback,
  .was-validated .has-danger .is-focused .form-control:valid ~ .valid-tooltip,
  .was-validated .has-danger .is-focused .custom-file-control:valid ~ .valid-tooltip, .has-danger .is-focused .form-control.is-valid ~ .valid-feedback, .has-danger .is-focused .is-valid.custom-file-control ~ .valid-feedback,
  .has-danger .is-focused .form-control.is-valid ~ .valid-tooltip,
  .has-danger .is-focused .is-valid.custom-file-control ~ .valid-tooltip, .was-validated
  .has-danger .is-focused .custom-select:valid ~ .valid-feedback,
  .was-validated
  .has-danger .is-focused .custom-select:valid ~ .valid-tooltip,
  .has-danger .is-focused .custom-select.is-valid ~ .valid-feedback,
  .has-danger .is-focused .custom-select.is-valid ~ .valid-tooltip, .was-validated .has-danger.is-focused .form-control:valid ~ .valid-feedback, .was-validated .has-danger.is-focused .custom-file-control:valid ~ .valid-feedback,
  .was-validated .has-danger.is-focused .form-control:valid ~ .valid-tooltip,
  .was-validated .has-danger.is-focused .custom-file-control:valid ~ .valid-tooltip, .has-danger.is-focused .form-control.is-valid ~ .valid-feedback, .has-danger.is-focused .is-valid.custom-file-control ~ .valid-feedback,
  .has-danger.is-focused .form-control.is-valid ~ .valid-tooltip,
  .has-danger.is-focused .is-valid.custom-file-control ~ .valid-tooltip, .was-validated
  .has-danger.is-focused .custom-select:valid ~ .valid-feedback,
  .was-validated
  .has-danger.is-focused .custom-select:valid ~ .valid-tooltip,
  .has-danger.is-focused .custom-select.is-valid ~ .valid-feedback,
  .has-danger.is-focused .custom-select.is-valid ~ .valid-tooltip {
    display: block; }

.was-validated .has-danger .is-focused .form-check-input:valid ~ .form-check-label, .has-danger .is-focused .form-check-input.is-valid ~ .form-check-label, .was-validated .has-danger.is-focused .form-check-input:valid ~ .form-check-label, .has-danger.is-focused .form-check-input.is-valid ~ .form-check-label {
  color: #f44336; }

.was-validated .has-danger .is-focused .form-check-input:valid ~ .valid-feedback,
.was-validated .has-danger .is-focused .form-check-input:valid ~ .valid-tooltip, .has-danger .is-focused .form-check-input.is-valid ~ .valid-feedback,
.has-danger .is-focused .form-check-input.is-valid ~ .valid-tooltip, .was-validated .has-danger.is-focused .form-check-input:valid ~ .valid-feedback,
.was-validated .has-danger.is-focused .form-check-input:valid ~ .valid-tooltip, .has-danger.is-focused .form-check-input.is-valid ~ .valid-feedback,
.has-danger.is-focused .form-check-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .has-danger .is-focused .custom-control-input:valid ~ .custom-control-label, .has-danger .is-focused .custom-control-input.is-valid ~ .custom-control-label, .was-validated .has-danger.is-focused .custom-control-input:valid ~ .custom-control-label, .has-danger.is-focused .custom-control-input.is-valid ~ .custom-control-label {
  color: #f44336; }
  .was-validated .has-danger .is-focused .custom-control-input:valid ~ .custom-control-label::before, .has-danger .is-focused .custom-control-input.is-valid ~ .custom-control-label::before, .was-validated .has-danger.is-focused .custom-control-input:valid ~ .custom-control-label::before, .has-danger.is-focused .custom-control-input.is-valid ~ .custom-control-label::before {
    background-color: #fbb4af; }

.was-validated .has-danger .is-focused .custom-control-input:valid ~ .valid-feedback,
.was-validated .has-danger .is-focused .custom-control-input:valid ~ .valid-tooltip, .has-danger .is-focused .custom-control-input.is-valid ~ .valid-feedback,
.has-danger .is-focused .custom-control-input.is-valid ~ .valid-tooltip, .was-validated .has-danger.is-focused .custom-control-input:valid ~ .valid-feedback,
.was-validated .has-danger.is-focused .custom-control-input:valid ~ .valid-tooltip, .has-danger.is-focused .custom-control-input.is-valid ~ .valid-feedback,
.has-danger.is-focused .custom-control-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .has-danger .is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .has-danger .is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before, .was-validated .has-danger.is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .has-danger.is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  background-color: #f77066; }

.was-validated .has-danger .is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .has-danger .is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before, .was-validated .has-danger.is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .has-danger.is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(244, 67, 54, 0.25); }

.was-validated .has-danger .is-focused .custom-file-input:valid ~ .custom-file-label, .has-danger .is-focused .custom-file-input.is-valid ~ .custom-file-label, .was-validated .has-danger.is-focused .custom-file-input:valid ~ .custom-file-label, .has-danger.is-focused .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #f44336; }
  .was-validated .has-danger .is-focused .custom-file-input:valid ~ .custom-file-label::before, .has-danger .is-focused .custom-file-input.is-valid ~ .custom-file-label::before, .was-validated .has-danger.is-focused .custom-file-input:valid ~ .custom-file-label::before, .has-danger.is-focused .custom-file-input.is-valid ~ .custom-file-label::before {
    border-color: inherit; }

.was-validated .has-danger .is-focused .custom-file-input:valid ~ .valid-feedback,
.was-validated .has-danger .is-focused .custom-file-input:valid ~ .valid-tooltip, .has-danger .is-focused .custom-file-input.is-valid ~ .valid-feedback,
.has-danger .is-focused .custom-file-input.is-valid ~ .valid-tooltip, .was-validated .has-danger.is-focused .custom-file-input:valid ~ .valid-feedback,
.was-validated .has-danger.is-focused .custom-file-input:valid ~ .valid-tooltip, .has-danger.is-focused .custom-file-input.is-valid ~ .valid-feedback,
.has-danger.is-focused .custom-file-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .has-danger .is-focused .custom-file-input:valid:focus ~ .custom-file-label, .has-danger .is-focused .custom-file-input.is-valid:focus ~ .custom-file-label, .was-validated .has-danger.is-focused .custom-file-input:valid:focus ~ .custom-file-label, .has-danger.is-focused .custom-file-input.is-valid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.25); }

.has-danger .is-focused [class^='bmd-label'],
.has-danger .is-focused [class*=' bmd-label'], .has-danger.is-focused [class^='bmd-label'],
.has-danger.is-focused [class*=' bmd-label'] {
  color: #f44336; }

.has-danger .is-focused .bmd-label-placeholder, .has-danger.is-focused .bmd-label-placeholder {
  color: #f44336; }

.has-danger .is-focused .form-control, .has-danger .is-focused .custom-file-control, .has-danger.is-focused .form-control, .has-danger.is-focused .custom-file-control {
  border-color: #f44336; }

.has-danger .is-focused .bmd-help, .has-danger.is-focused .bmd-help {
  color: rgba(0, 0, 0, 0.54); }

.bmd-form-group {
  position: relative;
  padding-top: 1.75rem; }
  .bmd-form-group [class^='bmd-label'],
  .bmd-form-group [class*=' bmd-label'] {
    position: absolute;
    pointer-events: none;
    transition: 0.3s ease all; }
    .bmd-form-group [class^='bmd-label'].bmd-label-floating,
    .bmd-form-group [class*=' bmd-label'].bmd-label-floating {
      will-change: left, top, contents; }
  .bmd-form-group.is-filled .bmd-label-placeholder {
    display: none; }
  .bmd-form-group.bmd-collapse-inline {
    display: flex;
    align-items: center;
    padding: 0;
    min-height: 2.1em; }
    .bmd-form-group.bmd-collapse-inline .collapse {
      flex: 1;
      display: none; }
      .bmd-form-group.bmd-collapse-inline .collapse.show {
        max-width: 1200px; }
    .bmd-form-group.bmd-collapse-inline .collapsing,
    .bmd-form-group.bmd-collapse-inline .width:not(.collapse),
    .bmd-form-group.bmd-collapse-inline .collapse.show {
      display: block; }
    .bmd-form-group.bmd-collapse-inline .collapsing {
      transition-duration: 0.2s;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }
  .bmd-form-group .form-control, .bmd-form-group .custom-file-control,
  .bmd-form-group label,
  .bmd-form-group input::placeholder {
    line-height: 1; }
  .bmd-form-group .radio label,
  .bmd-form-group label.radio-inline,
  .bmd-form-group .checkbox label,
  .bmd-form-group label.checkbox-inline,
  .bmd-form-group .switch label {
    line-height: 1.5; }
  .bmd-form-group input::placeholder {
    font-size: 1rem; }
  .bmd-form-group .checkbox label,
  .bmd-form-group .radio label,
  .bmd-form-group label {
    font-size: 1rem; }
  .bmd-form-group .bmd-label-floating,
  .bmd-form-group .bmd-label-placeholder {
    top: 2.1875rem; }
  .bmd-form-group.is-focused .bmd-label-floating,
  .bmd-form-group .is-focused .bmd-label-floating, .bmd-form-group.is-filled .bmd-label-floating,
  .bmd-form-group .is-filled .bmd-label-floating {
    top: 1rem;
    left: 0;
    font-size: 0.75rem; }
  .bmd-form-group .bmd-label-static {
    top: 1rem;
    left: 0;
    font-size: 0.75rem; }
  .bmd-form-group .bmd-help {
    margin-top: 0;
    font-size: 0.75rem; }
  .bmd-form-group .form-control.form-control-success, .bmd-form-group .form-control-success.custom-file-control, .bmd-form-group .form-control.form-control-warning, .bmd-form-group .form-control-warning.custom-file-control, .bmd-form-group .form-control.form-control-danger, .bmd-form-group .form-control-danger.custom-file-control {
    background-size: 0 100%, 100% 100%, 0.9375rem 0.9375rem; }
    .bmd-form-group .form-control.form-control-success, .bmd-form-group .form-control-success.custom-file-control, .bmd-form-group .form-control.form-control-success:focus, .bmd-form-group .form-control-success.custom-file-control:focus,
    .bmd-form-group.is-focused .bmd-form-group .form-control.form-control-success,
    .bmd-form-group.is-focused .bmd-form-group .form-control-success.custom-file-control, .bmd-form-group .form-control.form-control-warning, .bmd-form-group .form-control-warning.custom-file-control, .bmd-form-group .form-control.form-control-warning:focus, .bmd-form-group .form-control-warning.custom-file-control:focus,
    .bmd-form-group.is-focused .bmd-form-group .form-control.form-control-warning,
    .bmd-form-group.is-focused .bmd-form-group .form-control-warning.custom-file-control, .bmd-form-group .form-control.form-control-danger, .bmd-form-group .form-control-danger.custom-file-control, .bmd-form-group .form-control.form-control-danger:focus, .bmd-form-group .form-control-danger.custom-file-control:focus,
    .bmd-form-group.is-focused .bmd-form-group .form-control.form-control-danger,
    .bmd-form-group.is-focused .bmd-form-group .form-control-danger.custom-file-control {
      padding-right: 0;
      background-repeat: no-repeat, no-repeat;
      background-position: center bottom, center calc(100% - 1px), center right 0.46875rem; }
    .bmd-form-group .form-control.form-control-success:focus, .bmd-form-group .form-control-success.custom-file-control:focus,
    .bmd-form-group.is-focused .bmd-form-group .form-control.form-control-success,
    .bmd-form-group.is-focused .bmd-form-group .form-control-success.custom-file-control, .bmd-form-group .form-control.form-control-warning:focus, .bmd-form-group .form-control-warning.custom-file-control:focus,
    .bmd-form-group.is-focused .bmd-form-group .form-control.form-control-warning,
    .bmd-form-group.is-focused .bmd-form-group .form-control-warning.custom-file-control, .bmd-form-group .form-control.form-control-danger:focus, .bmd-form-group .form-control-danger.custom-file-control:focus,
    .bmd-form-group.is-focused .bmd-form-group .form-control.form-control-danger,
    .bmd-form-group.is-focused .bmd-form-group .form-control-danger.custom-file-control {
      background-size: 100% 100%, 100% 100%, 0.9375rem 0.9375rem; }
  .bmd-form-group.bmd-form-group-sm {
    padding-top: 1.40625rem; }
    .bmd-form-group.bmd-form-group-sm .form-control, .bmd-form-group.bmd-form-group-sm .custom-file-control,
    .bmd-form-group.bmd-form-group-sm label,
    .bmd-form-group.bmd-form-group-sm input::placeholder {
      line-height: 1; }
    .bmd-form-group.bmd-form-group-sm .radio label,
    .bmd-form-group.bmd-form-group-sm label.radio-inline,
    .bmd-form-group.bmd-form-group-sm .checkbox label,
    .bmd-form-group.bmd-form-group-sm label.checkbox-inline,
    .bmd-form-group.bmd-form-group-sm .switch label {
      line-height: 1.5; }
    .bmd-form-group.bmd-form-group-sm input::placeholder {
      font-size: 0.875rem; }
    .bmd-form-group.bmd-form-group-sm .checkbox label,
    .bmd-form-group.bmd-form-group-sm .radio label,
    .bmd-form-group.bmd-form-group-sm label {
      font-size: 0.875rem; }
    .bmd-form-group.bmd-form-group-sm .bmd-label-floating,
    .bmd-form-group.bmd-form-group-sm .bmd-label-placeholder {
      top: 1.65625rem; }
    .bmd-form-group.bmd-form-group-sm.is-focused .bmd-label-floating,
    .bmd-form-group.bmd-form-group-sm .is-focused .bmd-label-floating, .bmd-form-group.bmd-form-group-sm.is-filled .bmd-label-floating,
    .bmd-form-group.bmd-form-group-sm .is-filled .bmd-label-floating {
      top: 0.75rem;
      left: 0;
      font-size: 0.65625rem; }
    .bmd-form-group.bmd-form-group-sm .bmd-label-static {
      top: 0.75rem;
      left: 0;
      font-size: 0.65625rem; }
    .bmd-form-group.bmd-form-group-sm .bmd-help {
      margin-top: 0;
      font-size: 0.65625rem; }
    .bmd-form-group.bmd-form-group-sm .form-control.form-control-success, .bmd-form-group.bmd-form-group-sm .form-control-success.custom-file-control, .bmd-form-group.bmd-form-group-sm .form-control.form-control-warning, .bmd-form-group.bmd-form-group-sm .form-control-warning.custom-file-control, .bmd-form-group.bmd-form-group-sm .form-control.form-control-danger, .bmd-form-group.bmd-form-group-sm .form-control-danger.custom-file-control {
      background-size: 0 100%, 100% 100%, 0.6875rem 0.6875rem; }
      .bmd-form-group.bmd-form-group-sm .form-control.form-control-success, .bmd-form-group.bmd-form-group-sm .form-control-success.custom-file-control, .bmd-form-group.bmd-form-group-sm .form-control.form-control-success:focus, .bmd-form-group.bmd-form-group-sm .form-control-success.custom-file-control:focus,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-success,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control-success.custom-file-control, .bmd-form-group.bmd-form-group-sm .form-control.form-control-warning, .bmd-form-group.bmd-form-group-sm .form-control-warning.custom-file-control, .bmd-form-group.bmd-form-group-sm .form-control.form-control-warning:focus, .bmd-form-group.bmd-form-group-sm .form-control-warning.custom-file-control:focus,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-warning,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control-warning.custom-file-control, .bmd-form-group.bmd-form-group-sm .form-control.form-control-danger, .bmd-form-group.bmd-form-group-sm .form-control-danger.custom-file-control, .bmd-form-group.bmd-form-group-sm .form-control.form-control-danger:focus, .bmd-form-group.bmd-form-group-sm .form-control-danger.custom-file-control:focus,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-danger,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control-danger.custom-file-control {
        padding-right: 0;
        background-repeat: no-repeat, no-repeat;
        background-position: center bottom, center calc(100% - 1px), center right 0.34375rem; }
      .bmd-form-group.bmd-form-group-sm .form-control.form-control-success:focus, .bmd-form-group.bmd-form-group-sm .form-control-success.custom-file-control:focus,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-success,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control-success.custom-file-control, .bmd-form-group.bmd-form-group-sm .form-control.form-control-warning:focus, .bmd-form-group.bmd-form-group-sm .form-control-warning.custom-file-control:focus,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-warning,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control-warning.custom-file-control, .bmd-form-group.bmd-form-group-sm .form-control.form-control-danger:focus, .bmd-form-group.bmd-form-group-sm .form-control-danger.custom-file-control:focus,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-danger,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control-danger.custom-file-control {
        background-size: 100% 100%, 100% 100%, 0.6875rem 0.6875rem; }
  .bmd-form-group.bmd-form-group-lg {
    padding-top: 1.9375rem; }
    .bmd-form-group.bmd-form-group-lg .form-control, .bmd-form-group.bmd-form-group-lg .custom-file-control,
    .bmd-form-group.bmd-form-group-lg label,
    .bmd-form-group.bmd-form-group-lg input::placeholder {
      line-height: 1; }
    .bmd-form-group.bmd-form-group-lg .radio label,
    .bmd-form-group.bmd-form-group-lg label.radio-inline,
    .bmd-form-group.bmd-form-group-lg .checkbox label,
    .bmd-form-group.bmd-form-group-lg label.checkbox-inline,
    .bmd-form-group.bmd-form-group-lg .switch label {
      line-height: 1.5; }
    .bmd-form-group.bmd-form-group-lg input::placeholder {
      font-size: 1.25rem; }
    .bmd-form-group.bmd-form-group-lg .checkbox label,
    .bmd-form-group.bmd-form-group-lg .radio label,
    .bmd-form-group.bmd-form-group-lg label {
      font-size: 1.25rem; }
    .bmd-form-group.bmd-form-group-lg .bmd-label-floating,
    .bmd-form-group.bmd-form-group-lg .bmd-label-placeholder {
      top: 2.5rem; }
    .bmd-form-group.bmd-form-group-lg.is-focused .bmd-label-floating,
    .bmd-form-group.bmd-form-group-lg .is-focused .bmd-label-floating, .bmd-form-group.bmd-form-group-lg.is-filled .bmd-label-floating,
    .bmd-form-group.bmd-form-group-lg .is-filled .bmd-label-floating {
      top: 1rem;
      left: 0;
      font-size: 0.9375rem; }
    .bmd-form-group.bmd-form-group-lg .bmd-label-static {
      top: 1rem;
      left: 0;
      font-size: 0.9375rem; }
    .bmd-form-group.bmd-form-group-lg .bmd-help {
      margin-top: 0;
      font-size: 0.9375rem; }
    .bmd-form-group.bmd-form-group-lg .form-control.form-control-success, .bmd-form-group.bmd-form-group-lg .form-control-success.custom-file-control, .bmd-form-group.bmd-form-group-lg .form-control.form-control-warning, .bmd-form-group.bmd-form-group-lg .form-control-warning.custom-file-control, .bmd-form-group.bmd-form-group-lg .form-control.form-control-danger, .bmd-form-group.bmd-form-group-lg .form-control-danger.custom-file-control {
      background-size: 0 100%, 100% 100%, 1.1875rem 1.1875rem; }
      .bmd-form-group.bmd-form-group-lg .form-control.form-control-success, .bmd-form-group.bmd-form-group-lg .form-control-success.custom-file-control, .bmd-form-group.bmd-form-group-lg .form-control.form-control-success:focus, .bmd-form-group.bmd-form-group-lg .form-control-success.custom-file-control:focus,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-success,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control-success.custom-file-control, .bmd-form-group.bmd-form-group-lg .form-control.form-control-warning, .bmd-form-group.bmd-form-group-lg .form-control-warning.custom-file-control, .bmd-form-group.bmd-form-group-lg .form-control.form-control-warning:focus, .bmd-form-group.bmd-form-group-lg .form-control-warning.custom-file-control:focus,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-warning,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control-warning.custom-file-control, .bmd-form-group.bmd-form-group-lg .form-control.form-control-danger, .bmd-form-group.bmd-form-group-lg .form-control-danger.custom-file-control, .bmd-form-group.bmd-form-group-lg .form-control.form-control-danger:focus, .bmd-form-group.bmd-form-group-lg .form-control-danger.custom-file-control:focus,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-danger,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control-danger.custom-file-control {
        padding-right: 0;
        background-repeat: no-repeat, no-repeat;
        background-position: center bottom, center calc(100% - 1px), center right 0.59375rem; }
      .bmd-form-group.bmd-form-group-lg .form-control.form-control-success:focus, .bmd-form-group.bmd-form-group-lg .form-control-success.custom-file-control:focus,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-success,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control-success.custom-file-control, .bmd-form-group.bmd-form-group-lg .form-control.form-control-warning:focus, .bmd-form-group.bmd-form-group-lg .form-control-warning.custom-file-control:focus,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-warning,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control-warning.custom-file-control, .bmd-form-group.bmd-form-group-lg .form-control.form-control-danger:focus, .bmd-form-group.bmd-form-group-lg .form-control-danger.custom-file-control:focus,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-danger,
      .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control-danger.custom-file-control {
        background-size: 100% 100%, 100% 100%, 1.1875rem 1.1875rem; }

.form-control, .custom-file-control,
label,
input::placeholder {
  line-height: 1; }

.radio label,
label.radio-inline,
.checkbox label,
label.checkbox-inline,
.switch label {
  line-height: 1.5; }

input::placeholder {
  font-size: 1rem; }

.checkbox label,
.radio label,
label {
  font-size: 1rem; }

.bmd-label-floating,
.bmd-label-placeholder {
  top: 2.1875rem; }

.is-focused .bmd-label-floating,
.is-focused .bmd-label-floating,
.is-filled .bmd-label-floating,
.is-filled .bmd-label-floating {
  top: 1rem;
  left: 0;
  font-size: 0.75rem; }

.bmd-label-static {
  top: 1rem;
  left: 0;
  font-size: 0.75rem; }

.bmd-help {
  margin-top: 0;
  font-size: 0.75rem; }

.form-control.form-control-success, .form-control-success.custom-file-control, .form-control.form-control-warning, .form-control-warning.custom-file-control, .form-control.form-control-danger, .form-control-danger.custom-file-control {
  background-size: 0 100%, 100% 100%, 0.9375rem 0.9375rem; }
  .form-control.form-control-success, .form-control-success.custom-file-control, .form-control.form-control-success:focus, .form-control-success.custom-file-control:focus,
  .bmd-form-group.is-focused .form-control.form-control-success,
  .bmd-form-group.is-focused .form-control-success.custom-file-control, .form-control.form-control-warning, .form-control-warning.custom-file-control, .form-control.form-control-warning:focus, .form-control-warning.custom-file-control:focus,
  .bmd-form-group.is-focused .form-control.form-control-warning,
  .bmd-form-group.is-focused .form-control-warning.custom-file-control, .form-control.form-control-danger, .form-control-danger.custom-file-control, .form-control.form-control-danger:focus, .form-control-danger.custom-file-control:focus,
  .bmd-form-group.is-focused .form-control.form-control-danger,
  .bmd-form-group.is-focused .form-control-danger.custom-file-control {
    padding-right: 0;
    background-repeat: no-repeat, no-repeat;
    background-position: center bottom, center calc(100% - 1px), center right 0.46875rem; }
  .form-control.form-control-success:focus, .form-control-success.custom-file-control:focus,
  .bmd-form-group.is-focused .form-control.form-control-success,
  .bmd-form-group.is-focused .form-control-success.custom-file-control, .form-control.form-control-warning:focus, .form-control-warning.custom-file-control:focus,
  .bmd-form-group.is-focused .form-control.form-control-warning,
  .bmd-form-group.is-focused .form-control-warning.custom-file-control, .form-control.form-control-danger:focus, .form-control-danger.custom-file-control:focus,
  .bmd-form-group.is-focused .form-control.form-control-danger,
  .bmd-form-group.is-focused .form-control-danger.custom-file-control {
    background-size: 100% 100%, 100% 100%, 0.9375rem 0.9375rem; }

select, select.form-control, select.custom-file-control {
  -moz-appearance: none;
  -webkit-appearance: none; }

@media (min-width: 576px) {
  .form-inline .input-group {
    display: inline-flex;
    align-items: center; } }

.input-group .input-group-addon {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: transparent;
  border-color: transparent; }

.input-group .input-group-addon + input,
.input-group input + .input-group-addon {
  margin-left: .75rem; }

.list-group {
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  padding: .5rem 0; }
  .list-group.bmd-list-group-sm {
    padding: .25rem 0; }
    .list-group.bmd-list-group-sm .list-group-item {
      padding: .5rem 1rem; }

.bmd-list-group-col {
  display: flex;
  flex-direction: column;
  min-width: 0; }

.list-group-item {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
  padding: 1rem;
  line-height: 1; }
  .list-group-item .list-group-item-text {
    min-width: 0;
    max-height: 2.188rem;
    overflow: hidden;
    text-overflow: ellipsis; }
  .list-group-item :first-child {
    margin-right: 2rem; }
  .list-group-item > .pull-xs-right,
  .list-group-item > .pull-sm-right,
  .list-group-item > .pull-md-right,
  .list-group-item > .pull-lg-right,
  .list-group-item > .pull-xl-right,
  .list-group-item > * ~ .label:last-child,
  .list-group-item > * ~ .material-icons:last-child {
    margin-right: 0;
    margin-left: auto; }
  .list-group-item .material-icons.pull-xs-right,
  .list-group-item .material-icons.pull-sm-right,
  .list-group-item .material-icons.pull-md-right,
  .list-group-item .material-icons.pull-lg-right,
  .list-group-item .material-icons.pull-xl-right,
  .list-group-item .material-icons ~ .material-icons:last-child {
    padding-left: 1rem; }
  .list-group-item .list-group-item-text {
    font-size: .875rem;
    color: rgba(0, 0, 0, 0.54); }

.table-inverse {
  color: rgba(255, 255, 255, 0.84); }

.table thead th {
  font-size: 0.95rem;
  font-weight: 500;
  color: rgba(0, 0, 0, 0.54);
  border-top-width: 0;
  border-bottom-width: 1px; }

thead.thead-inverse th,
.table-inverse thead th {
  color: rgba(255, 255, 255, 0.54); }

.table-inverse th,
.table-inverse td,
.table-inverse thead th {
  border-color: rgba(255, 255, 255, 0.06); }

.nav-link {
  text-transform: uppercase; }

.navbar-nav .nav-link {
  padding: 0.5321rem;
  font-size: 0.875rem;
  font-weight: 400; }

.nav-tabs,
.nav-pills {
  border: 0; }
  .nav-tabs .nav-link,
  .nav-pills .nav-link {
    padding: 1.4286em 0.8575em;
    font-size: 0.875rem;
    font-weight: 500;
    border: 0; }
  .nav-tabs .nav-link.active,
  .nav-tabs .nav-item.show .nav-link,
  .nav-pills .nav-link.active,
  .nav-pills .nav-item.show .nav-link {
    background-color: transparent;
    color: inherit; }

.nav-tabs .nav-link {
  border-bottom: 0.214rem solid transparent; }

.nav-tabs .nav-link {
  color: rgba(0, 0, 0, 0.54); }
  .nav-tabs .nav-link.active {
    color: rgba(0, 0, 0, 0.87);
    border-color: theme-color(primary); }
    .nav-tabs .nav-link.active:hover, .nav-tabs .nav-link.active:focus {
      border-color: theme-color(primary); }
  .nav-tabs .nav-link.disabled {
    color: rgba(0, 0, 0, 0.26); }
    .nav-tabs .nav-link.disabled, .nav-tabs .nav-link.disabled:hover, .nav-tabs .nav-link.disabled:focus {
      color: rgba(0, 0, 0, 0.26); }

.nav-tabs.bg-primary .nav-link {
  color: white; }
  .nav-tabs.bg-primary .nav-link.active {
    color: #fff;
    border-color: #fff; }
    .nav-tabs.bg-primary .nav-link.active:hover, .nav-tabs.bg-primary .nav-link.active:focus {
      border-color: #fff; }
  .nav-tabs.bg-primary .nav-link.disabled {
    color: rgba(255, 255, 255, 0.84); }
    .nav-tabs.bg-primary .nav-link.disabled, .nav-tabs.bg-primary .nav-link.disabled:hover, .nav-tabs.bg-primary .nav-link.disabled:focus {
      color: rgba(255, 255, 255, 0.84); }

.nav-tabs.bg-dark .nav-link {
  color: white; }
  .nav-tabs.bg-dark .nav-link.active {
    color: #fff;
    border-color: #fff; }
    .nav-tabs.bg-dark .nav-link.active:hover, .nav-tabs.bg-dark .nav-link.active:focus {
      border-color: #fff; }
  .nav-tabs.bg-dark .nav-link.disabled {
    color: rgba(255, 255, 255, 0.84); }
    .nav-tabs.bg-dark .nav-link.disabled, .nav-tabs.bg-dark .nav-link.disabled:hover, .nav-tabs.bg-dark .nav-link.disabled:focus {
      color: rgba(255, 255, 255, 0.84); }

.nav .nav-item {
  position: relative; }

.navbar {
  z-index: 1;
  border: 0;
  border-radius: 0;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
  .navbar .navbar-brand {
    position: relative; }
  .navbar > .container {
    flex: 1; }

.navbar-dark .form-control, .navbar-dark .custom-file-control {
  color: #fff; }
  .navbar-dark .form-control::placeholder, .navbar-dark .custom-file-control::placeholder {
    color: rgba(255, 255, 255, 0.5); }

.alert {
  border: 0;
  border-radius: 0; }

.progress {
  height: 4px;
  background: #c8c8c8;
  border-radius: 0;
  box-shadow: none; }
  .progress .progress-bar {
    box-shadow: none; }

.page-item:first-child .page-link {
  border-top-left-radius: 4em;
  border-bottom-left-radius: 4em; }

.page-item:last-child .page-link {
  border-top-right-radius: 4em;
  border-bottom-right-radius: 4em;
  margin-right: 0; }

.page-item:first-child .page-link, .page-item:last-child .page-link {
  display: flex;
  justify-content: center;
  padding-right: 0;
  padding-left: 0; }
  .page-item:first-child .page-link > .material-icons, .page-item:last-child .page-link > .material-icons {
    font-size: 1.5em; }

.page-link {
  min-width: 2.6em;
  margin-right: 0.5em;
  text-align: center;
  border-radius: 4em; }
  .page-link:hover, .page-link:focus {
    text-decoration: none; }

.pagination-lg .page-link {
  min-width: 2.8em; }

.pagination-lg .page-link {
  padding: 0.75rem 0;
  font-size: 1.25rem;
  line-height: 1.5; }

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 4em;
  border-bottom-left-radius: 4em; }

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 4em;
  border-bottom-right-radius: 4em; }

.pagination-sm .page-link {
  min-width: 2.2em; }

.pagination-sm .page-link {
  padding: 0.25rem 0;
  font-size: 0.875rem;
  line-height: 1.5; }

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 4em;
  border-bottom-left-radius: 4em; }

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 4em;
  border-bottom-right-radius: 4em; }

h6 {
  font-weight: 500; }

.tooltip-arrow {
  display: none; }

.card {
  border: 0;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
  .card .card-header {
    padding: 1rem;
    background-color: transparent; }
  .card .card-block {
    padding: 1.5rem 1rem 1rem; }
  .card h1.card-title,
  .card h2.card-title,
  .card h3.card-title,
  .card h4.card-title,
  .card h5.card-title,
  .card h6.card-title {
    font-size: 1.5rem;
    font-weight: 300; }
  .card .bmd-card-actions,
  .card it may be necessary .card-footer {
    padding: .5rem; }
  .card.bmd-card-raised {
    box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2); }
  @media (min-width: 992px) {
    .card.bmd-card-flat {
      box-shadow: none; } }

.modal-content {
  border: 0;
  border-radius: 0.125rem; }
  .modal-content .modal-header {
    padding: 24px 24px 0;
    border-bottom: 0; }
  .modal-content .modal-body {
    padding: 20px 24px 24px; }
  .modal-content .modal-footer {
    padding: 8px 8px 8px 24px;
    border-top: 0; }
    .modal-content .modal-footer .btn, .modal-content .modal-footer .custom-file-control::before {
      margin: 0; }
    .modal-content .modal-footer .btn + .btn, .modal-content .modal-footer .custom-file-control::before + .btn, .modal-content .modal-footer .btn + .custom-file-control::before, .modal-content .modal-footer .custom-file-control::before + .custom-file-control::before {
      margin-left: 8px; }

.dropdown-menu {
  display: none;
  padding: .25rem 0;
  border: 0;
  opacity: 0;
  transform: scale(0);
  transform-origin: 0 0;
  will-change: transform, opacity;
  transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1); }
  @media (min-width: 768px) {
    .dropdown-menu {
      padding: .5rem 0; } }
  .dropdown-menu.showing {
    animation-name: bmd-dropdown-animation;
    animation-duration: 0.3s;
    animation-fill-mode: forwards;
    animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }
  .open > .dropdown-menu, .dropdown-menu.show {
    display: block;
    opacity: 1;
    transform: scale(1); }
  .dropdown-menu.hiding {
    display: block;
    opacity: 0;
    transform: scale(0); }
  .dropdown-menu[x-placement="bottom-start"], .dropdown-menu.dropdown-menu-left {
    transform-origin: 0 0; }
  .dropdown-menu[x-placement="bottom-end"], .dropdown-menu.dropdown-menu-right {
    transform-origin: 100% 0; }
  .dropdown-menu[x-placement="top-start"] {
    transform-origin: 0 100%; }
  .dropdown-menu[x-placement="top-end"] {
    transform-origin: 100% 100%; }
  .dropdown-menu .dropdown-item {
    position: relative;
    display: flex;
    flex-flow: row wrap;
    align-items: center;
    min-width: 7rem;
    max-width: 17.5rem;
    min-height: 3rem;
    padding: 0.8rem 1rem 0.8rem 1rem;
    overflow: hidden;
    line-height: 1;
    text-overflow: ellipsis;
    word-wrap: break-word; }
    .dropdown-menu .dropdown-item.active, .dropdown-menu .dropdown-item:active {
      background-color: inherit;
      color: inherit; }
    @media (min-width: 768px) {
      .dropdown-menu .dropdown-item {
        padding-right: 1.5rem;
        padding-left: 1.5rem; } }

.dropdown-toggle.bmd-btn-icon::after, .dropdown-toggle.bmd-btn-fab::after {
  display: none; }

.dropdown-toggle.bmd-btn-icon ~ .dropdown-menu.dropdown-menu-top-left, .dropdown-toggle.bmd-btn-icon ~ .dropdown-menu.dropdown-menu-top-right, .dropdown-toggle.bmd-btn-fab ~ .dropdown-menu.dropdown-menu-top-left, .dropdown-toggle.bmd-btn-fab ~ .dropdown-menu.dropdown-menu-top-right {
  bottom: 2rem; }

.dropdown-toggle.bmd-btn-fab-sm ~ .dropdown-menu.dropdown-menu-top-left, .dropdown-toggle.bmd-btn-fab-sm ~ .dropdown-menu.dropdown-menu-top-right {
  bottom: 2.5rem; }

.dropdown-toggle.bmd-btn-icon ~ .dropdown-menu {
  margin: 0; }

.show .dropdown-toggle.btn, .show .dropdown-toggle.custom-file-control::before, .show .dropdown-toggle.btn-secondary, .show .dropdown-toggle.btn-success, .show .dropdown-toggle.btn-info, .show .dropdown-toggle.btn-warning, .show .dropdown-toggle.btn-danger {
  background-color: transparent; }

@keyframes bmd-dropdown-animation {
  from {
    opacity: 0;
    transform: scale(0); }
  to {
    opacity: 1;
    transform: scale(1); } }

.bmd-layout-drawer {
  position: absolute;
  z-index: 5;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  flex-wrap: nowrap;
  max-height: 100%;
  overflow: visible;
  overflow-y: auto;
  font-size: .875rem;
  background: #fff;
  transition: transform;
  will-change: transform;
  transform-style: preserve-3d;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
  transition-duration: 0.2s;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }
  .bmd-layout-drawer > * {
    flex-shrink: 0; }
  .bmd-layout-drawer > header {
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 1rem; }
    .bmd-layout-drawer > header .navbar-brand {
      padding-left: 1.5rem;
      font-size: 1.25rem; }
  .bmd-layout-drawer > .list-group {
    padding-top: 1rem; }
    .bmd-layout-drawer > .list-group .list-group-item {
      padding-right: 2.5rem;
      padding-left: 2.5rem;
      font-size: .8125rem;
      font-weight: 500; }

.bmd-drawer-f-l > .bmd-layout-drawer {
  top: 0;
  left: 0;
  width: 240px;
  height: 100%;
  transform: translateX(-250px); }

.bmd-drawer-f-l > .bmd-layout-header,
.bmd-drawer-f-l > .bmd-layout-content {
  margin-left: 0; }

.bmd-drawer-f-r > .bmd-layout-drawer {
  top: 0;
  right: 0;
  width: 240px;
  height: 100%;
  transform: translateX(250px); }

.bmd-drawer-f-r > .bmd-layout-header,
.bmd-drawer-f-r > .bmd-layout-content {
  margin-right: 0; }

.bmd-drawer-f-t > .bmd-layout-drawer {
  top: 0;
  left: 0;
  width: 100%;
  height: 100px;
  transform: translateY(-110px); }

.bmd-drawer-f-t > .bmd-layout-content {
  margin-top: 0; }

.bmd-drawer-f-b > .bmd-layout-drawer {
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100px;
  transform: translateY(110px); }

.bmd-drawer-f-b > .bmd-layout-content {
  margin-bottom: 0; }

:not(.bmd-drawer-out).bmd-drawer-in.bmd-drawer-f-l > .bmd-layout-header {
  width: calc(100% - 240px);
  margin-left: 240px; }

:not(.bmd-drawer-out).bmd-drawer-in.bmd-drawer-f-l > .bmd-layout-drawer {
  transform: translateX(0); }

:not(.bmd-drawer-out).bmd-drawer-in.bmd-drawer-f-l > .bmd-layout-content {
  margin-left: 240px; }

:not(.bmd-drawer-out).bmd-drawer-in.bmd-drawer-f-r > .bmd-layout-header {
  width: calc(100% - 240px);
  margin-right: 240px; }

:not(.bmd-drawer-out).bmd-drawer-in.bmd-drawer-f-r > .bmd-layout-drawer {
  transform: translateX(0); }

:not(.bmd-drawer-out).bmd-drawer-in.bmd-drawer-f-r > .bmd-layout-content {
  margin-right: 240px; }

:not(.bmd-drawer-out).bmd-drawer-in.bmd-drawer-f-t > .bmd-layout-header {
  margin-top: 100px; }

:not(.bmd-drawer-out).bmd-drawer-in.bmd-drawer-f-t > .bmd-layout-drawer {
  transform: translateY(0); }

:not(.bmd-drawer-out).bmd-drawer-in.bmd-drawer-f-b > .bmd-layout-drawer {
  transform: translateY(0); }

:not(.bmd-drawer-out).bmd-drawer-in.bmd-drawer-f-b > .bmd-layout-content {
  margin-bottom: 100px; }

:not(.bmd-drawer-out).bmd-drawer-overlay.bmd-drawer-overlay > .bmd-layout-backdrop .in {
  visibility: visible;
  background-color: rgba(0, 0, 0, 0.5); }

@supports (pointer-events: auto) {
  :not(.bmd-drawer-out).bmd-drawer-overlay.bmd-drawer-overlay > .bmd-layout-backdrop.in {
    pointer-events: auto;
    opacity: 1; } }

:not(.bmd-drawer-out).bmd-drawer-overlay.bmd-drawer-overlay.bmd-drawer-f-l > .bmd-layout-header,
:not(.bmd-drawer-out).bmd-drawer-overlay.bmd-drawer-overlay.bmd-drawer-f-l > .bmd-layout-content {
  width: 100%;
  margin-left: 0; }

:not(.bmd-drawer-out).bmd-drawer-overlay.bmd-drawer-overlay.bmd-drawer-f-r > .bmd-layout-header,
:not(.bmd-drawer-out).bmd-drawer-overlay.bmd-drawer-overlay.bmd-drawer-f-r > .bmd-layout-content {
  width: 100%;
  margin-right: 0; }

:not(.bmd-drawer-out).bmd-drawer-overlay.bmd-drawer-overlay > .bmd-layout-backdrop .in {
  visibility: visible;
  background-color: rgba(0, 0, 0, 0.5); }

@supports (pointer-events: auto) {
  :not(.bmd-drawer-out).bmd-drawer-overlay.bmd-drawer-overlay > .bmd-layout-backdrop.in {
    pointer-events: auto;
    opacity: 1; } }

:not(.bmd-drawer-out).bmd-drawer-overlay.bmd-drawer-overlay.bmd-drawer-f-t > .bmd-layout-header {
  margin-top: 0; }

:not(.bmd-drawer-out).bmd-drawer-overlay.bmd-drawer-overlay.bmd-drawer-f-b > .bmd-layout-content {
  margin-bottom: 0; }

@media (min-width: 576px) {
  :not(.bmd-drawer-out).bmd-drawer-in-sm-up.bmd-drawer-f-l > .bmd-layout-header {
    width: calc(100% - 240px);
    margin-left: 240px; }
  :not(.bmd-drawer-out).bmd-drawer-in-sm-up.bmd-drawer-f-l > .bmd-layout-drawer {
    transform: translateX(0); }
  :not(.bmd-drawer-out).bmd-drawer-in-sm-up.bmd-drawer-f-l > .bmd-layout-content {
    margin-left: 240px; }
  :not(.bmd-drawer-out).bmd-drawer-in-sm-up.bmd-drawer-f-r > .bmd-layout-header {
    width: calc(100% - 240px);
    margin-right: 240px; }
  :not(.bmd-drawer-out).bmd-drawer-in-sm-up.bmd-drawer-f-r > .bmd-layout-drawer {
    transform: translateX(0); }
  :not(.bmd-drawer-out).bmd-drawer-in-sm-up.bmd-drawer-f-r > .bmd-layout-content {
    margin-right: 240px; } }

@media (min-width: 576px) {
  :not(.bmd-drawer-out).bmd-drawer-in-sm-up.bmd-drawer-f-t > .bmd-layout-header {
    margin-top: 100px; }
  :not(.bmd-drawer-out).bmd-drawer-in-sm-up.bmd-drawer-f-t > .bmd-layout-drawer {
    transform: translateY(0); }
  :not(.bmd-drawer-out).bmd-drawer-in-sm-up.bmd-drawer-f-b > .bmd-layout-drawer {
    transform: translateY(0); }
  :not(.bmd-drawer-out).bmd-drawer-in-sm-up.bmd-drawer-f-b > .bmd-layout-content {
    margin-bottom: 100px; } }

@media (max-width: 767.98px) {
  :not(.bmd-drawer-out).bmd-drawer-overlay-sm-down > .bmd-layout-backdrop .in {
    visibility: visible;
    background-color: rgba(0, 0, 0, 0.5); }
  @supports (pointer-events: auto) {
    :not(.bmd-drawer-out).bmd-drawer-overlay-sm-down > .bmd-layout-backdrop.in {
      pointer-events: auto;
      opacity: 1; } }
  :not(.bmd-drawer-out).bmd-drawer-overlay-sm-down.bmd-drawer-f-l > .bmd-layout-header,
  :not(.bmd-drawer-out).bmd-drawer-overlay-sm-down.bmd-drawer-f-l > .bmd-layout-content {
    width: 100%;
    margin-left: 0; }
  :not(.bmd-drawer-out).bmd-drawer-overlay-sm-down.bmd-drawer-f-r > .bmd-layout-header,
  :not(.bmd-drawer-out).bmd-drawer-overlay-sm-down.bmd-drawer-f-r > .bmd-layout-content {
    width: 100%;
    margin-right: 0; } }

@media (max-width: 767.98px) {
  :not(.bmd-drawer-out).bmd-drawer-overlay-sm-down > .bmd-layout-backdrop .in {
    visibility: visible;
    background-color: rgba(0, 0, 0, 0.5); }
  @supports (pointer-events: auto) {
    :not(.bmd-drawer-out).bmd-drawer-overlay-sm-down > .bmd-layout-backdrop.in {
      pointer-events: auto;
      opacity: 1; } }
  :not(.bmd-drawer-out).bmd-drawer-overlay-sm-down.bmd-drawer-f-t > .bmd-layout-header {
    margin-top: 0; }
  :not(.bmd-drawer-out).bmd-drawer-overlay-sm-down.bmd-drawer-f-b > .bmd-layout-content {
    margin-bottom: 0; } }

@media (min-width: 768px) {
  :not(.bmd-drawer-out).bmd-drawer-in-md-up.bmd-drawer-f-l > .bmd-layout-header {
    width: calc(100% - 240px);
    margin-left: 240px; }
  :not(.bmd-drawer-out).bmd-drawer-in-md-up.bmd-drawer-f-l > .bmd-layout-drawer {
    transform: translateX(0); }
  :not(.bmd-drawer-out).bmd-drawer-in-md-up.bmd-drawer-f-l > .bmd-layout-content {
    margin-left: 240px; }
  :not(.bmd-drawer-out).bmd-drawer-in-md-up.bmd-drawer-f-r > .bmd-layout-header {
    width: calc(100% - 240px);
    margin-right: 240px; }
  :not(.bmd-drawer-out).bmd-drawer-in-md-up.bmd-drawer-f-r > .bmd-layout-drawer {
    transform: translateX(0); }
  :not(.bmd-drawer-out).bmd-drawer-in-md-up.bmd-drawer-f-r > .bmd-layout-content {
    margin-right: 240px; } }

@media (min-width: 768px) {
  :not(.bmd-drawer-out).bmd-drawer-in-md-up.bmd-drawer-f-t > .bmd-layout-header {
    margin-top: 100px; }
  :not(.bmd-drawer-out).bmd-drawer-in-md-up.bmd-drawer-f-t > .bmd-layout-drawer {
    transform: translateY(0); }
  :not(.bmd-drawer-out).bmd-drawer-in-md-up.bmd-drawer-f-b > .bmd-layout-drawer {
    transform: translateY(0); }
  :not(.bmd-drawer-out).bmd-drawer-in-md-up.bmd-drawer-f-b > .bmd-layout-content {
    margin-bottom: 100px; } }

@media (max-width: 991.98px) {
  :not(.bmd-drawer-out).bmd-drawer-overlay-md-down > .bmd-layout-backdrop .in {
    visibility: visible;
    background-color: rgba(0, 0, 0, 0.5); }
  @supports (pointer-events: auto) {
    :not(.bmd-drawer-out).bmd-drawer-overlay-md-down > .bmd-layout-backdrop.in {
      pointer-events: auto;
      opacity: 1; } }
  :not(.bmd-drawer-out).bmd-drawer-overlay-md-down.bmd-drawer-f-l > .bmd-layout-header,
  :not(.bmd-drawer-out).bmd-drawer-overlay-md-down.bmd-drawer-f-l > .bmd-layout-content {
    width: 100%;
    margin-left: 0; }
  :not(.bmd-drawer-out).bmd-drawer-overlay-md-down.bmd-drawer-f-r > .bmd-layout-header,
  :not(.bmd-drawer-out).bmd-drawer-overlay-md-down.bmd-drawer-f-r > .bmd-layout-content {
    width: 100%;
    margin-right: 0; } }

@media (max-width: 991.98px) {
  :not(.bmd-drawer-out).bmd-drawer-overlay-md-down > .bmd-layout-backdrop .in {
    visibility: visible;
    background-color: rgba(0, 0, 0, 0.5); }
  @supports (pointer-events: auto) {
    :not(.bmd-drawer-out).bmd-drawer-overlay-md-down > .bmd-layout-backdrop.in {
      pointer-events: auto;
      opacity: 1; } }
  :not(.bmd-drawer-out).bmd-drawer-overlay-md-down.bmd-drawer-f-t > .bmd-layout-header {
    margin-top: 0; }
  :not(.bmd-drawer-out).bmd-drawer-overlay-md-down.bmd-drawer-f-b > .bmd-layout-content {
    margin-bottom: 0; } }

@media (min-width: 992px) {
  :not(.bmd-drawer-out).bmd-drawer-in-lg-up.bmd-drawer-f-l > .bmd-layout-header {
    width: calc(100% - 240px);
    margin-left: 240px; }
  :not(.bmd-drawer-out).bmd-drawer-in-lg-up.bmd-drawer-f-l > .bmd-layout-drawer {
    transform: translateX(0); }
  :not(.bmd-drawer-out).bmd-drawer-in-lg-up.bmd-drawer-f-l > .bmd-layout-content {
    margin-left: 240px; }
  :not(.bmd-drawer-out).bmd-drawer-in-lg-up.bmd-drawer-f-r > .bmd-layout-header {
    width: calc(100% - 240px);
    margin-right: 240px; }
  :not(.bmd-drawer-out).bmd-drawer-in-lg-up.bmd-drawer-f-r > .bmd-layout-drawer {
    transform: translateX(0); }
  :not(.bmd-drawer-out).bmd-drawer-in-lg-up.bmd-drawer-f-r > .bmd-layout-content {
    margin-right: 240px; } }

@media (min-width: 992px) {
  :not(.bmd-drawer-out).bmd-drawer-in-lg-up.bmd-drawer-f-t > .bmd-layout-header {
    margin-top: 100px; }
  :not(.bmd-drawer-out).bmd-drawer-in-lg-up.bmd-drawer-f-t > .bmd-layout-drawer {
    transform: translateY(0); }
  :not(.bmd-drawer-out).bmd-drawer-in-lg-up.bmd-drawer-f-b > .bmd-layout-drawer {
    transform: translateY(0); }
  :not(.bmd-drawer-out).bmd-drawer-in-lg-up.bmd-drawer-f-b > .bmd-layout-content {
    margin-bottom: 100px; } }

@media (max-width: 1199.98px) {
  :not(.bmd-drawer-out).bmd-drawer-overlay-lg-down > .bmd-layout-backdrop .in {
    visibility: visible;
    background-color: rgba(0, 0, 0, 0.5); }
  @supports (pointer-events: auto) {
    :not(.bmd-drawer-out).bmd-drawer-overlay-lg-down > .bmd-layout-backdrop.in {
      pointer-events: auto;
      opacity: 1; } }
  :not(.bmd-drawer-out).bmd-drawer-overlay-lg-down.bmd-drawer-f-l > .bmd-layout-header,
  :not(.bmd-drawer-out).bmd-drawer-overlay-lg-down.bmd-drawer-f-l > .bmd-layout-content {
    width: 100%;
    margin-left: 0; }
  :not(.bmd-drawer-out).bmd-drawer-overlay-lg-down.bmd-drawer-f-r > .bmd-layout-header,
  :not(.bmd-drawer-out).bmd-drawer-overlay-lg-down.bmd-drawer-f-r > .bmd-layout-content {
    width: 100%;
    margin-right: 0; } }

@media (max-width: 1199.98px) {
  :not(.bmd-drawer-out).bmd-drawer-overlay-lg-down > .bmd-layout-backdrop .in {
    visibility: visible;
    background-color: rgba(0, 0, 0, 0.5); }
  @supports (pointer-events: auto) {
    :not(.bmd-drawer-out).bmd-drawer-overlay-lg-down > .bmd-layout-backdrop.in {
      pointer-events: auto;
      opacity: 1; } }
  :not(.bmd-drawer-out).bmd-drawer-overlay-lg-down.bmd-drawer-f-t > .bmd-layout-header {
    margin-top: 0; }
  :not(.bmd-drawer-out).bmd-drawer-overlay-lg-down.bmd-drawer-f-b > .bmd-layout-content {
    margin-bottom: 0; } }

@media (min-width: 1200px) {
  :not(.bmd-drawer-out).bmd-drawer-in-xl-up.bmd-drawer-f-l > .bmd-layout-header {
    width: calc(100% - 240px);
    margin-left: 240px; }
  :not(.bmd-drawer-out).bmd-drawer-in-xl-up.bmd-drawer-f-l > .bmd-layout-drawer {
    transform: translateX(0); }
  :not(.bmd-drawer-out).bmd-drawer-in-xl-up.bmd-drawer-f-l > .bmd-layout-content {
    margin-left: 240px; }
  :not(.bmd-drawer-out).bmd-drawer-in-xl-up.bmd-drawer-f-r > .bmd-layout-header {
    width: calc(100% - 240px);
    margin-right: 240px; }
  :not(.bmd-drawer-out).bmd-drawer-in-xl-up.bmd-drawer-f-r > .bmd-layout-drawer {
    transform: translateX(0); }
  :not(.bmd-drawer-out).bmd-drawer-in-xl-up.bmd-drawer-f-r > .bmd-layout-content {
    margin-right: 240px; } }

@media (min-width: 1200px) {
  :not(.bmd-drawer-out).bmd-drawer-in-xl-up.bmd-drawer-f-t > .bmd-layout-header {
    margin-top: 100px; }
  :not(.bmd-drawer-out).bmd-drawer-in-xl-up.bmd-drawer-f-t > .bmd-layout-drawer {
    transform: translateY(0); }
  :not(.bmd-drawer-out).bmd-drawer-in-xl-up.bmd-drawer-f-b > .bmd-layout-drawer {
    transform: translateY(0); }
  :not(.bmd-drawer-out).bmd-drawer-in-xl-up.bmd-drawer-f-b > .bmd-layout-content {
    margin-bottom: 100px; } }

:not(.bmd-drawer-out).bmd-drawer-overlay-xl-down > .bmd-layout-backdrop .in {
  visibility: visible;
  background-color: rgba(0, 0, 0, 0.5); }

@supports (pointer-events: auto) {
  :not(.bmd-drawer-out).bmd-drawer-overlay-xl-down > .bmd-layout-backdrop.in {
    pointer-events: auto;
    opacity: 1; } }

:not(.bmd-drawer-out).bmd-drawer-overlay-xl-down.bmd-drawer-f-l > .bmd-layout-header,
:not(.bmd-drawer-out).bmd-drawer-overlay-xl-down.bmd-drawer-f-l > .bmd-layout-content {
  width: 100%;
  margin-left: 0; }

:not(.bmd-drawer-out).bmd-drawer-overlay-xl-down.bmd-drawer-f-r > .bmd-layout-header,
:not(.bmd-drawer-out).bmd-drawer-overlay-xl-down.bmd-drawer-f-r > .bmd-layout-content {
  width: 100%;
  margin-right: 0; }

:not(.bmd-drawer-out).bmd-drawer-overlay-xl-down > .bmd-layout-backdrop .in {
  visibility: visible;
  background-color: rgba(0, 0, 0, 0.5); }

@supports (pointer-events: auto) {
  :not(.bmd-drawer-out).bmd-drawer-overlay-xl-down > .bmd-layout-backdrop.in {
    pointer-events: auto;
    opacity: 1; } }

:not(.bmd-drawer-out).bmd-drawer-overlay-xl-down.bmd-drawer-f-t > .bmd-layout-header {
  margin-top: 0; }

:not(.bmd-drawer-out).bmd-drawer-overlay-xl-down.bmd-drawer-f-b > .bmd-layout-content {
  margin-bottom: 0; }

.ripple {
  position: relative; }

.ripple-container {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  width: 100%;
  height: 100%;
  overflow: hidden;
  pointer-events: none;
  border-radius: inherit; }
  .ripple-container .ripple-decorator {
    position: absolute;
    width: 20px;
    height: 20px;
    margin-top: -10px;
    margin-left: -10px;
    pointer-events: none;
    background-color: rgba(0, 0, 0, 0.05);
    border-radius: 100%;
    opacity: 0;
    transform: scale(1);
    transform-origin: 50%; }
    .ripple-container .ripple-decorator.ripple-on {
      opacity: 0.1;
      transition: opacity 0.15s ease-in 0s, transform 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.1s; }
    .ripple-container .ripple-decorator.ripple-out {
      opacity: 0;
      transition: opacity 0.1s linear 0s !important; }

#snackbar-container {
  position: fixed;
  bottom: 0;
  left: 0;
  z-index: 99999;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%; }

.snackbar {
  display: inline-block;
  min-width: 100%;
  max-height: 0;
  opacity: 0;
  transition: transform 0.25s cubic-bezier(0, 0, 0.2, 1), opacity 0s 0.25s, max-height 0.25s;
  transform: translateY(100%); }
  .snackbar.toast .snackbar-content {
    border-radius: 10rem; }

.snackbar-content {
  display: block;
  padding: 0.8rem 1.5rem;
  margin-top: 3px;
  font-size: .9rem;
  color: #fff;
  background-color: #323232;
  border-radius: 2px; }
  .snackbar-content .btn, .snackbar-content .custom-file-control::before {
    margin-bottom: 0; }

.snackbar.snackbar-opened {
  max-height: 100px;
  opacity: 1;
  transition: transform 0.25s cubic-bezier(0, 0, 0.2, 1), opacity 0s 0s, max-height 0.25s;
  transform: translateY(0%); }

@media (min-width: 576px) {
  #snackbar-container {
    right: 1rem;
    left: 1rem;
    width: 100%; }
  .snackbar {
    min-width: 280px; } }
<?php }
}
