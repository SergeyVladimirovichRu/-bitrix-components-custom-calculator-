<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="calculator-container" id="calculator-<?=$this->randString();?>">
    <h2>Универсальный калькулятор</h2>
    
    <div class="calculator-form">
        <div class="form-group">
            <label for="amount">Сумма</label>
            <input type="number" id="amount" class="form-control" placeholder="Введите сумму">
        </div>
        
        <div class="form-group">
            <label for="period">Срок</label>
            <input type="number" id="period" class="form-control" placeholder="Введите срок">
            <select id="period-type" class="form-control">
                <option value="days">Дней</option>
                <option value="months" selected>Месяцев</option>
                <option value="years">Лет</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="rate">Процентная ставка</label>
            <input type="number" id="rate" class="form-control" placeholder="Введите ставку" step="0.01">
        </div>
        
        <button id="calculate-btn" class="btn btn-primary">Рассчитать</button>
    </div>
    
    <div class="calculator-results" style="display:none;">
        <h3>Результаты расчета</h3>
        <div id="results-container"></div>
    </div>
</div>

<link rel="stylesheet" href="<?=$templateFolder?>/style.css">
<script src="<?=$templateFolder?>/script.js"></script>
