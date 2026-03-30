<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2 class="main-heading">Let's Calculate</h2>

    <div class="calculator-card">
        <input type="text" id="screen" readonly placeholder="0">

        <div class="number-grid">
            <button type="button" class="num-btn clear-btn" onclick="clearScreen()">C</button>
            <button type="button" class="num-btn op-btn" onclick="appendToScreen('/')">÷</button>
            <button type="button" class="num-btn op-btn" onclick="appendToScreen('*')">×</button>
            <button type="button" class="num-btn op-btn" onclick="backspace()">⌫</button>

            <button type="button" class="num-btn" onclick="appendToScreen('7')">7</button>
            <button type="button" class="num-btn" onclick="appendToScreen('8')">8</button>
            <button type="button" class="num-btn" onclick="appendToScreen('9')">9</button>
            <button type="button" class="num-btn op-btn" onclick="appendToScreen('-')">-</button>

            <button type="button" class="num-btn" onclick="appendToScreen('4')">4</button>
            <button type="button" class="num-btn" onclick="appendToScreen('5')">5</button>
            <button type="button" class="num-btn" onclick="appendToScreen('6')">6</button>
            <button type="button" class="num-btn op-btn" onclick="appendToScreen('+')">+</button>

            <button type="button" class="num-btn" onclick="appendToScreen('1')">1</button>
            <button type="button" class="num-btn" onclick="appendToScreen('2')">2</button>
            <button type="button" class="num-btn" onclick="appendToScreen('3')">3</button>
            <button type="button" class="num-btn equal-btn" onclick="calculate()">=</button>

            <button type="button" class="num-btn" style="grid-column: span 2; width: 100%;" onclick="appendToScreen('0')">0</button>
            <button type="button" class="num-btn" onclick="appendToScreen('.')">.</button>
        </div>
    </div>

<script>
    const screen = document.getElementById('screen');
    function appendToScreen(value) {
        if (screen.value === '0') screen.value = '';
        screen.value += value;
    }
    function clearScreen() { screen.value = '0'; }
    function backspace() {
        screen.value = screen.value.slice(0, -1);
        if (screen.value === '') screen.value = '0';
    }
    function calculate() {
        try {
            let result = eval(screen.value);
            if (!Number.isInteger(result)) result = result.toFixed(4);
            screen.value = result;
        } catch (error) { screen.value = "Error"; }
    }
</script>
</body>
</html>