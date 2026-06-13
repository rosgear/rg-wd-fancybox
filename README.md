[Русский](#русский) | [English](#english)

---

[![Latest Stable Version](https://img.shields.io/packagist/v/rosgear/rg-wd-fancybox.svg)](https://packagist.org/packages/rosgear/rg-wd-fancybox)
[![Total Downloads](https://img.shields.io/packagist/dt/rosgear/rg-wd-fancybox.svg)](https://packagist.org/packages/rosgear/rg-wd-fancybox)
[![Author](https://img.shields.io/badge/author-anton.tivonenko@gmail.com-blue.svg)](mailto:anton.tivonenko@gmail)
[![Source Code](https://img.shields.io/badge/source-rosgear/rg--wd--fancybox-blue.svg)](https://github.com/rosgear/rg-wd-fancybox)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](https://github.com/rosgear/rg-wd-fancybox/blob/main/LICENSE)
![Component type: widget](https://img.shields.io/badge/component%20type-widget-green.svg)
![Component ID: rg-wd-fancybox](https://img.shields.io/badge/component%20id-rg.wd.fancybox-green.svg)
![php 8.2+](https://img.shields.io/badge/php-min%208.2-red.svg)

<a name="русский"></a>
## <img src="https://raw.githubusercontent.com/rosgear/rg-wd-fancybox/refs/heads/main/assets/images/icon.svg" width="64px" height="64px" align="absmiddle"> Виджет «Лайтбокс Fancybox»

Виджет использует JavaScript‑библиотеку Fancybox (лайтбокс), предназначенную для удобного отображения контента поверх текущей веб‑страницы.

Что умеет Fancybox:

- показывать изображения в увеличенном виде (по клику на миниатюру);
- воспроизводить видео (в т. ч. с YouTube и Vimeo);
- встраивать контент через iframe (например, страницы других сайтов);
- отображать HTML‑элементы прямо на странице (скрытые блоки, формы и т. д.);
- загружать контент через AJAX без перезагрузки страницы;
- организовывать изображения в галереи со слайдером (с навигацией стрелками, автопрокруткой и т. п.).

### Пример применения
#### с менеджером виджетов:
```
$lightbox = Ge::$app->widgets->get('rg.wd.fancybox', ['width' => 600, 'height' => 400]);
$lightbox->run();
```
#### в шаблоне:
```
$this->widget('rg.wd.fancybox', ['width' => 600, 'height' => 400])->run();
```
#### с namespace:
```
use Rg\Widget\Fancybox\Widget as Lightbox;
Lightbox::widget(['width' => 600, 'height' => 400])->run();
```
если namespace ранее не добавлен в PSR, необходимо выполнить:
```
Ge::$loader->addPsr4('Rg\Widget\Fancybox\\', Ge::$app->modulePath . '/rg/rg.wd.fancybox/src');
```

### Установка

Для добавления виджета в ваш проект, вы можете просто выполнить команду ниже:

```
$ composer require rosgear/rg-wd-fancybox
```

или добавить в файл composer.json вашего проекта:
```
"require": {
    "rosgear/rg-wd-fancybox": "*"
}
```
или скачать архив на [странице виджета](https://rosgear.ru/component/rg-wd-fancybox/) в каталоге приложений RosGear.

После добавления виджета в проект выполните его установку в редакцию веб‑приложения с помощью Панели управления GePanel.

### Ресурсы
- [Старая версия Fancybox](http://fancybox.net/)
- [UI компонент Fancybox](https://fancyapps.com/fancybox/)

<a name="english"></a>
## <img src="https://raw.githubusercontent.com/rosgear/rg-wd-fancybox/refs/heads/main/assets/images/icon.svg" width="64px" height="64px" align="absmiddle"> Widget «Fancybox lightbox»

The widget uses the Fancybox JavaScript library (lightbox), which is designed to conveniently display content on top of the current web page.

What Fancybox can do:

- display enlarged images (by clicking on the thumbnail);
- play videos (including from YouTube and Vimeo);
- embed content via iframe (e.g., pages from other websites);
- display HTML elements directly on the page (hidden blocks, forms, etc.);
- load content via AJAX without reloading the page;
- organize images into galleries with a slider (with arrow navigation, auto-scrolling, etc.).

### Installation

To add the widget to your project, you can simply run the command below:

```
$ composer require rosgear/rg-wd-fancybox
```

or add to your project's composer.json file:
```
"require": {
    "rosgear/rg-wd-fancybox": "*"
}
```
or download the archive from the [widget page](https://rosgear.ru/component/rg-wd-fancybox/) in the RosGear application catalog.

After adding the widget to the project, install it into the web application edition using the GePanel Control Panel.