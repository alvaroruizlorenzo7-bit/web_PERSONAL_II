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

/* page/services.html.twig */
class __TwigTemplate_dc58d1faf83ae6d8332c78c17e7f28f8 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/services.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/services.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "service";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "


    <!-- Service Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container pt-5 pb-3\">
            <div class=\"text-center mb-3 pb-3\">
                <h6 class=\"text-primary text-uppercase\" style=\"letter-spacing: 5px;\">Services</h6>
                <h1>Tours & Travel Services</h1>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"service-item bg-white text-center mb-2 py-5 px-4\">
                        <i class=\"fa fa-2x fa-route mx-auto mb-4\"></i>
                        <h5 class=\"mb-2\">Travel Guide</h5>
                        <p class=\"m-0\">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"service-item bg-white text-center mb-2 py-5 px-4\">
                        <i class=\"fa fa-2x fa-ticket-alt mx-auto mb-4\"></i>
                        <h5 class=\"mb-2\">Ticket Booking</h5>
                        <p class=\"m-0\">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"service-item bg-white text-center mb-2 py-5 px-4\">
                        <i class=\"fa fa-2x fa-hotel mx-auto mb-4\"></i>
                        <h5 class=\"mb-2\">Hotel Booking</h5>
                        <p class=\"m-0\">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"service-item bg-white text-center mb-2 py-5 px-4\">
                        <i class=\"fa fa-2x fa-route mx-auto mb-4\"></i>
                        <h5 class=\"mb-2\">Travel Guide</h5>
                        <p class=\"m-0\">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"service-item bg-white text-center mb-2 py-5 px-4\">
                        <i class=\"fa fa-2x fa-ticket-alt mx-auto mb-4\"></i>
                        <h5 class=\"mb-2\">Ticket Booking</h5>
                        <p class=\"m-0\">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"service-item bg-white text-center mb-2 py-5 px-4\">
                        <i class=\"fa fa-2x fa-hotel mx-auto mb-4\"></i>
                        <h5 class=\"mb-2\">Hotel Booking</h5>
                        <p class=\"m-0\">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->





";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "page/services.html.twig";
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
        return array (  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title%}service{% endblock %}
{% block body%}



    <!-- Service Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container pt-5 pb-3\">
            <div class=\"text-center mb-3 pb-3\">
                <h6 class=\"text-primary text-uppercase\" style=\"letter-spacing: 5px;\">Services</h6>
                <h1>Tours & Travel Services</h1>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"service-item bg-white text-center mb-2 py-5 px-4\">
                        <i class=\"fa fa-2x fa-route mx-auto mb-4\"></i>
                        <h5 class=\"mb-2\">Travel Guide</h5>
                        <p class=\"m-0\">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"service-item bg-white text-center mb-2 py-5 px-4\">
                        <i class=\"fa fa-2x fa-ticket-alt mx-auto mb-4\"></i>
                        <h5 class=\"mb-2\">Ticket Booking</h5>
                        <p class=\"m-0\">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"service-item bg-white text-center mb-2 py-5 px-4\">
                        <i class=\"fa fa-2x fa-hotel mx-auto mb-4\"></i>
                        <h5 class=\"mb-2\">Hotel Booking</h5>
                        <p class=\"m-0\">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"service-item bg-white text-center mb-2 py-5 px-4\">
                        <i class=\"fa fa-2x fa-route mx-auto mb-4\"></i>
                        <h5 class=\"mb-2\">Travel Guide</h5>
                        <p class=\"m-0\">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"service-item bg-white text-center mb-2 py-5 px-4\">
                        <i class=\"fa fa-2x fa-ticket-alt mx-auto mb-4\"></i>
                        <h5 class=\"mb-2\">Ticket Booking</h5>
                        <p class=\"m-0\">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"service-item bg-white text-center mb-2 py-5 px-4\">
                        <i class=\"fa fa-2x fa-hotel mx-auto mb-4\"></i>
                        <h5 class=\"mb-2\">Hotel Booking</h5>
                        <p class=\"m-0\">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->





{% endblock %}", "page/services.html.twig", "/home/alumno/ieselcaminas-classroom-2daw-25-26-web-personal-ii-repositorio/templates/page/services.html.twig");
    }
}
