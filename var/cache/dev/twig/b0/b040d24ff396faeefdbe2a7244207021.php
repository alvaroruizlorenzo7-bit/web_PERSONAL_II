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

/* page/index.html.twig */
class __TwigTemplate_a63c01aa0b40e58b14da942482378595 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Proyecto alvaro";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "

    <!-- Team Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container pt-5 pb-3\">
            <div class=\"text-center mb-3 pb-3\">
                <h6 class=\"text-primary text-uppercase\" style=\"letter-spacing: 5px;\">Guides</h6>
                <h1>Our Travel Guides</h1>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-4 col-sm-6 pb-2\">
                    <div class=\"team-item bg-white mb-4\">
                        <div class=\"team-img position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/team-1.jpg\" alt=\"\">
                            <div class=\"team-social\">
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center py-4\">
                            <h5 class=\"text-truncate\">Guide Name</h5>
                            <p class=\"m-0\">Designation</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-4 col-sm-6 pb-2\">
                    <div class=\"team-item bg-white mb-4\">
                        <div class=\"team-img position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/team-2.jpg\" alt=\"\">
                            <div class=\"team-social\">
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center py-4\">
                            <h5 class=\"text-truncate\">Guide Name</h5>
                            <p class=\"m-0\">Designation</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-4 col-sm-6 pb-2\">
                    <div class=\"team-item bg-white mb-4\">
                        <div class=\"team-img position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/team-3.jpg\" alt=\"\">
                            <div class=\"team-social\">
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center py-4\">
                            <h5 class=\"text-truncate\">Guide Name</h5>
                            <p class=\"m-0\">Designation</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-4 col-sm-6 pb-2\">
                    <div class=\"team-item bg-white mb-4\">
                        <div class=\"team-img position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/team-4.jpg\" alt=\"\">
                            <div class=\"team-social\">
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center py-4\">
                            <h5 class=\"text-truncate\">Guide Name</h5>
                            <p class=\"m-0\">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mb-3 pb-3\">
                <h6 class=\"text-primary text-uppercase\" style=\"letter-spacing: 5px;\">Testimonial</h6>
                <h1>What Say Our Clients</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel\">
                <div class=\"text-center pb-4\">
                    <img class=\"img-fluid mx-auto\" src=\"img/testimonial-1.jpg\" style=\"width: 100px; height: 100px;\" >
                    <div class=\"testimonial-text bg-white p-4 mt-n5\">
                        <p class=\"mt-5\">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h5 class=\"text-truncate\">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class=\"text-center\">
                    <img class=\"img-fluid mx-auto\" src=\"img/testimonial-2.jpg\" style=\"width: 100px; height: 100px;\" >
                    <div class=\"testimonial-text bg-white p-4 mt-n5\">
                        <p class=\"mt-5\">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h5 class=\"text-truncate\">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class=\"text-center\">
                    <img class=\"img-fluid mx-auto\" src=\"img/testimonial-3.jpg\" style=\"width: 100px; height: 100px;\" >
                    <div class=\"testimonial-text bg-white p-4 mt-n5\">
                        <p class=\"mt-5\">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h5 class=\"text-truncate\">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class=\"text-center\">
                    <img class=\"img-fluid mx-auto\" src=\"img/testimonial-4.jpg\" style=\"width: 100px; height: 100px;\" >
                    <div class=\"testimonial-text bg-white p-4 mt-n5\">
                        <p class=\"mt-5\">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h5 class=\"text-truncate\">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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
        return "page/index.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Proyecto alvaro{% endblock %}

{% block body %}


    <!-- Team Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container pt-5 pb-3\">
            <div class=\"text-center mb-3 pb-3\">
                <h6 class=\"text-primary text-uppercase\" style=\"letter-spacing: 5px;\">Guides</h6>
                <h1>Our Travel Guides</h1>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-4 col-sm-6 pb-2\">
                    <div class=\"team-item bg-white mb-4\">
                        <div class=\"team-img position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/team-1.jpg\" alt=\"\">
                            <div class=\"team-social\">
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center py-4\">
                            <h5 class=\"text-truncate\">Guide Name</h5>
                            <p class=\"m-0\">Designation</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-4 col-sm-6 pb-2\">
                    <div class=\"team-item bg-white mb-4\">
                        <div class=\"team-img position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/team-2.jpg\" alt=\"\">
                            <div class=\"team-social\">
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center py-4\">
                            <h5 class=\"text-truncate\">Guide Name</h5>
                            <p class=\"m-0\">Designation</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-4 col-sm-6 pb-2\">
                    <div class=\"team-item bg-white mb-4\">
                        <div class=\"team-img position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/team-3.jpg\" alt=\"\">
                            <div class=\"team-social\">
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center py-4\">
                            <h5 class=\"text-truncate\">Guide Name</h5>
                            <p class=\"m-0\">Designation</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-4 col-sm-6 pb-2\">
                    <div class=\"team-item bg-white mb-4\">
                        <div class=\"team-img position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/team-4.jpg\" alt=\"\">
                            <div class=\"team-social\">
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center py-4\">
                            <h5 class=\"text-truncate\">Guide Name</h5>
                            <p class=\"m-0\">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mb-3 pb-3\">
                <h6 class=\"text-primary text-uppercase\" style=\"letter-spacing: 5px;\">Testimonial</h6>
                <h1>What Say Our Clients</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel\">
                <div class=\"text-center pb-4\">
                    <img class=\"img-fluid mx-auto\" src=\"img/testimonial-1.jpg\" style=\"width: 100px; height: 100px;\" >
                    <div class=\"testimonial-text bg-white p-4 mt-n5\">
                        <p class=\"mt-5\">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h5 class=\"text-truncate\">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class=\"text-center\">
                    <img class=\"img-fluid mx-auto\" src=\"img/testimonial-2.jpg\" style=\"width: 100px; height: 100px;\" >
                    <div class=\"testimonial-text bg-white p-4 mt-n5\">
                        <p class=\"mt-5\">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h5 class=\"text-truncate\">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class=\"text-center\">
                    <img class=\"img-fluid mx-auto\" src=\"img/testimonial-3.jpg\" style=\"width: 100px; height: 100px;\" >
                    <div class=\"testimonial-text bg-white p-4 mt-n5\">
                        <p class=\"mt-5\">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h5 class=\"text-truncate\">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class=\"text-center\">
                    <img class=\"img-fluid mx-auto\" src=\"img/testimonial-4.jpg\" style=\"width: 100px; height: 100px;\" >
                    <div class=\"testimonial-text bg-white p-4 mt-n5\">
                        <p class=\"mt-5\">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h5 class=\"text-truncate\">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


{% endblock %}
", "page/index.html.twig", "/home/alumno/Proyecto_Alvaro_web/templates/page/index.html.twig");
    }
}
