# SOLID

## Зачем?

Соблюдение SOLID принципов позволяет
строить архитектуру приложения, которое
со временем будет проще и дешевле
поддерживать и развивать.

## Структура

### S - Single responsibility principle (SRP)
Принцип единственной обязанности (ответственности)

Любой объект должен иметь лишь одну обязанность
и эта обязанность должна быть полностью
реализована в классе объекта. Должна быть
одна причина, чтобы вносить изменения
в класс объекта.

### O - Open/closed principle (OCP)
Принцип открытости / закрытости

Классы должны быть открыты для расширения и закрыты для изменения. Если хотим изменить поведение класса, не нужно менять код самого класса.

### L - Liskov Substitution Principle (LSP)
Принцип подстановки Барбары Лисков

Поведение наследуемых классов не должно противоречить поведению заданному базовым классом. Поведение наследуемых классов должно быть ожидаемым для кода, который использует базовый класс.

### I - Interface Segregation Principle (ISP)
Принцип разделения интерфейса

Множество специализированных интерфейсов лучше, чем один универсальный. Большие, объемные интерфейсы нужно разбивать таким образом, чтобы клиенты более мелких интерфейсов знали только о тех методах, которые нужны им для работы. При изменении метода интерфейса, не должны меняться клиенты, который этот метод используют.

### D - Dependency Inversion Principle
Принцип инверсии зависимостей

Зависимости должны строиться относительно абстракций,а не деталей (классов).

#### Принципы солид и паттерны проектирования не стоит использовать абсолютно во всех проектах, все зависит от задачи, ее размеров, сроков, необходимости в поддержке и от заказчика. 