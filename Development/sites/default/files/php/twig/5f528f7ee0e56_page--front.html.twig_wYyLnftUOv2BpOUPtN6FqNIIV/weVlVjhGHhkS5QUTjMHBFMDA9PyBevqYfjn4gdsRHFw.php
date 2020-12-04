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

/* themes/custom/dep/templates/page--front.html.twig */
class __TwigTemplate_3d39f47edd2e075edad29c150e1b9d26c448aa662d8a3ae1e5ce902cf357262c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 73, "date" => 159];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@bootstrap_barrio/layout/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@bootstrap_barrio/layout/page.html.twig", "themes/custom/dep/templates/page--front.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 72
    public function block_head($context, array $blocks = [])
    {
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "autopop", [])), "html", null, true);
        echo "
      <section class=\"main-header\">
      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-sm-3\">
                  ";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "masterlogo", [])), "html", null, true);
        echo "
              </div>
              <div class=\"col-sm-9 my-auto text-right\">
                  ";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "masternav", [])), "html", null, true);
        echo "
              </div>
          </div>
      </div>
  </section>
  <section id=\"hero\" class=\"angle-right\">
      <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-12 \">
              ";
        // line 90
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "hero", [])), "html", null, true);
        echo "
            </div>
          </div>
      </div>
  </section>
";
    }

    // line 97
    public function block_content($context, array $blocks = [])
    {
        // line 98
        echo "       <section class=\"front-content\">
        <div class=\"container\">
          <div class=\"row\">
                  ";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </div>
        </div>
       </section>
            
       <div class=\"angle-double-top\"></div>
            <section id=\"front-gallery\" >
              <div class=\"container\">
                ";
        // line 109
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "front_gallery", [])), "html", null, true);
        echo "
              </div>
            </section>
  <div class=\"angle-double-bottom\"></div>
  <section id=\"front-service-area\">
    <div class=\"container\">
      ";
        // line 115
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "front_service_area", [])), "html", null, true);
        echo "
    </div>
  </section>
  <div class=\"angle-double-l-r-top\"></div>
  <section id=\"front-testimonials\" >
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          ";
        // line 123
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "front_testimonials", [])), "html", null, true);
        echo "    
        </div>
      </div>
    </div>
  </section>
  <div class=\"angle-double-l-r-bottom\"></div>
  <section id=\"front-quote-request\">
    <div class=\"container\">
      <div class=\"col-sm-8 offset-sm-2\">
        ";
        // line 132
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "front_quote_request", [])), "html", null, true);
        echo "
      </div>      
    </div>
  </section>
";
    }

    // line 138
    public function block_footer($context, array $blocks = [])
    {
        // line 139
        echo "<section class=\"footer-top\">
    <svg class=\"decor\" height=\"100%\" preserveAspectRatio=\"none\" version=\"1.1\" viewBox=\"0 0 100 100\" width=\"100%\" xmlns=\"http://www.w3.org/2000/svg\">
        <path d=\"M0 0 L50 100 L100 0 L100 100 L0 100\" stroke-width=\"0\"></path>
    </svg>
</section>
        <div class=\"";
        // line 144
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
  <div class=\"row\">
    <div class=\"col-sm-4\">
      ";
        // line 147
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter1", [])), "html", null, true);
        echo "
    </div>
    <div class=\"col-sm-4\">
      ";
        // line 150
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter2", [])), "html", null, true);
        echo "
    </div>
    <div class=\"col-sm-4\">
      ";
        // line 153
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter3", [])), "html", null, true);
        echo "
    </div>
  </div>  
</div>
<div class=\"row\">
  <div class=\"col-sm-12 copyright\">
    <p>&copy; ";
        // line 159
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Danny Eaton Plumbing, Trinity NC USA</p>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/dep/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 159,  193 => 153,  187 => 150,  181 => 147,  175 => 144,  168 => 139,  165 => 138,  156 => 132,  144 => 123,  133 => 115,  124 => 109,  113 => 101,  108 => 98,  105 => 97,  95 => 90,  83 => 81,  77 => 78,  69 => 73,  66 => 72,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/dep/templates/page--front.html.twig", "/home/edeaton/dev.dannyeatonplumbing.com/themes/custom/dep/templates/page--front.html.twig");
    }
}
