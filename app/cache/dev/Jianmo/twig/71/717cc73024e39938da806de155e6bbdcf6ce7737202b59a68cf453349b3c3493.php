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

/* WorkshowPlugin:index:gallery.html.twig */
class __TwigTemplate_1c3aec674c8c5f774bd15f82f5596e88d11613aaeeb0ae8ab41c6438ae5ccc91 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "WorkshowPlugin:Base:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WorkshowPlugin:index:gallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WorkshowPlugin:index:gallery.html.twig"));

        $this->parent = $this->loadTemplate("WorkshowPlugin:Base:base.html.twig", "WorkshowPlugin:index:gallery.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
  <div class=\"gallery-box1\">
    <div class=\"gallery-top\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-sm-8\">
            <div class=\"gallery-title\">
              <div class=\"gallery-title-name\">我是作品标题</div>
              <div class=\"gallery-title-viewers\">
                <img src=\"static-dist/workshowplugin/img/gallery/viewers.svg\">2245
              </div>
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div class=\"gallery-author\">
              <img src=\"static-dist/workshowplugin/img/header/head-test.png\">
              <div class=\"gallery-author-information\">
                <span><b>作者名字</b></span>
                <br>
                <div class=\"gallery-author-introduction\">
                  <span>除了打游戏，其他什么都不会......</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-8\">
            <div class=\"gallery-cover\">
              <img src=\"static-dist/workshowplugin/img/gallery/Cover.png\">
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div class=\"gallery-work\">
              <div class=\"gallery-work-name\">
                作品简介：
              </div>
              <div class=\"gallery-work-introduction\">
                内容超多，地图50+ 物品300+ 生存，冒险，创造，奖励箱，超平坦等玩法，祝大家游戏愉快！（注意：有时候F键无法吃食物是因为你在此之前吃的食物总量达到20饥饿值了） 感谢所有为此作品点赞评分的MC玩家，为我的世界（英文版）做出贡献。 请您抬起您那高贵的手点赞+5星+分享。
                WSAD或上下左右键操作跳下（爬梯）左右行走；Q键扔东西，E键打开背包或瞄准箱子或门打开；按空格把物品分成1/N；P键暂停；F键吃东西：Q键扔东西。
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>
  <div class=\"gallery-box2\">
    <div style=\"font-size: 24px;font-weight: bold;\">
      推荐作品
    </div>
    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-sm-2\">
          <div class=\"gallery-recommend\">
            <img src=\"static-dist/workshowplugin/img/header/head-test.png\">
            <b>作品名称</b>
          </div>
        </div>
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-2\"></div>
      </div>
    </div>
    <div class=\"\"></div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WorkshowPlugin:index:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'WorkshowPlugin:Base:base.html.twig' %}
{% block content %}

  <div class=\"gallery-box1\">
    <div class=\"gallery-top\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-sm-8\">
            <div class=\"gallery-title\">
              <div class=\"gallery-title-name\">我是作品标题</div>
              <div class=\"gallery-title-viewers\">
                <img src=\"static-dist/workshowplugin/img/gallery/viewers.svg\">2245
              </div>
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div class=\"gallery-author\">
              <img src=\"static-dist/workshowplugin/img/header/head-test.png\">
              <div class=\"gallery-author-information\">
                <span><b>作者名字</b></span>
                <br>
                <div class=\"gallery-author-introduction\">
                  <span>除了打游戏，其他什么都不会......</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-8\">
            <div class=\"gallery-cover\">
              <img src=\"static-dist/workshowplugin/img/gallery/Cover.png\">
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div class=\"gallery-work\">
              <div class=\"gallery-work-name\">
                作品简介：
              </div>
              <div class=\"gallery-work-introduction\">
                内容超多，地图50+ 物品300+ 生存，冒险，创造，奖励箱，超平坦等玩法，祝大家游戏愉快！（注意：有时候F键无法吃食物是因为你在此之前吃的食物总量达到20饥饿值了） 感谢所有为此作品点赞评分的MC玩家，为我的世界（英文版）做出贡献。 请您抬起您那高贵的手点赞+5星+分享。
                WSAD或上下左右键操作跳下（爬梯）左右行走；Q键扔东西，E键打开背包或瞄准箱子或门打开；按空格把物品分成1/N；P键暂停；F键吃东西：Q键扔东西。
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>
  <div class=\"gallery-box2\">
    <div style=\"font-size: 24px;font-weight: bold;\">
      推荐作品
    </div>
    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-sm-2\">
          <div class=\"gallery-recommend\">
            <img src=\"static-dist/workshowplugin/img/header/head-test.png\">
            <b>作品名称</b>
          </div>
        </div>
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-2\"></div>
      </div>
    </div>
    <div class=\"\"></div>
  </div>
{% endblock %}", "WorkshowPlugin:index:gallery.html.twig", "/var/www/bootcamp/chenlong/project-it-migrant-workers/plugins/WorkshowPlugin/Resources/views/index/gallery.html.twig");
    }
}
