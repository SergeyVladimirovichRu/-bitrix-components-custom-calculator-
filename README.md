# -bitrix-components-custom-calculator-
Калькулятор для Битрикс

Клонируйте его локально:
git clone https://github.com/ваш-логин/bitrix-calculator-component.git
cd bitrix-calculator-component

# Калькулятор для Битрикс

Универсальный калькулятор для сайтов на 1С-Битрикс с поддержкой различных типов расчетов.

## Возможности

- Кредитный калькулятор
- Депозитный калькулятор
- Строительный калькулятор
- Пользовательские расчеты
- Адаптивный дизайн
- Настройка через параметры компонента

## Установка

1. Скопируйте папку `bitrix/components/custom/calculator` в `/bitrix/components/custom/` вашего сайта
2. Добавьте компонент на страницу через визуальный редактор или вручную:
```php
<?$APPLICATION->IncludeComponent(
    "custom:calculator",
    "",
    array(
        "CALCULATOR_TYPE" => "loan"
    )
);?>


## 4. Публикация и настройка

1. Закоммитьте и запушьте изменения:
   ```bash
   git add .
   git commit -m "Initial commit with calculator component"
   git push origin main
