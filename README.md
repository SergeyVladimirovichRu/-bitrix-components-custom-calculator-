# Универсальный калькулятор для Битрикс

![Скриншот калькулятора](/docs/screenshot.png)

Готовый к использованию компонент калькулятора для 1С-Битрикс с поддержкой различных типов расчетов.

## Возможности

- ✅ Кредитный калькулятор (аннуитетные платежи)
- ✅ Депозитный калькулятор (с капитализацией)
- ✅ Строительный калькулятор (расчет материалов)
- ✅ Адаптивный дизайн (работает на мобильных)
- ✅ Гибкая настройка через параметры
- ✅ Поддержка локализации (русский/английский)

## Установка

1. Скопируйте папку `component/bitrix/components/custom/calculator` в:
   ```
   /bitrix/components/custom/
   ```
   на вашем сайте.

2. Добавьте компонент на страницу через админку или вручную:

```php
<?$APPLICATION->IncludeComponent(
    "custom:calculator",
    "",
    array(
        "CALCULATOR_TYPE" => "loan", // loan|deposit|construction
        "CACHE_TIME" => 3600
    )
);?>
```

## Параметры компонента

| Параметр | Значение | Описание |
|----------|----------|----------|
| CALCULATOR_TYPE | loan/deposit/construction | Тип калькулятора |
| SHOW_RESULTS | Y/N | Показывать результаты сразу |
| DEFAULT_AMOUNT | число | Сумма по умолчанию |

## Демо-примеры

### Кредитный калькулятор
```php
<?$APPLICATION->IncludeComponent(
    "custom:calculator",
    "",
    array(
        "CALCULATOR_TYPE" => "loan",
        "DEFAULT_AMOUNT" => 1000000
    )
);?>
```

[Все примеры использования](/docs/DEMO.md)

## Для разработчиков

1. Клонируйте репозиторий:
```bash
git clone https://github.com/your-repo/bitrix-calculator-component.git
```

2. Установите через Composer:
```bash
composer require your-vendor/bitrix-calculator
```

## Лицензия

MIT License. См. [LICENSE](LICENSE) файл.

---

**Готово к использованию!** [Скачать последнюю версию](https://github.com/your-repo/bitrix-calculator-component/releases)
