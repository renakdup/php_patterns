# Strategy (Стратегия)
##### Type: Behavioral patten

![Strategy pattern](../../assets/images/Strategy_pattern.png)

##### Description:  
 Поведенческий шаблон проектирования, предназначенный для определения семейства алгоритмов, инкапсуляции каждого из них и обеспечения их взаимозаменяемости. Это позволяет выбирать алгоритм путём определения соответствующего класса. Шаблон *Strategy* позволяет менять выбранный алгоритм независимо от объектов-клиентов, которые его используют. Также этот паттерн является хорошей альтернативой наследованию (вместо расширения абстрактного класса).
 
##### Used in the cases:  
 - Когда в одном и том же месте в зависимости от текущего состояния системы (или её окружения) должны использоваться различные алгоритмы
 - Когда различные вариации алгоритмов реализованы в виде развесистого условного оператора. Каждая ветка такого оператора представляет собой вариацию алгоритма
 - Когда есть множетсво похожиж подклассов, отличающихся только некоторым поведением
             
##### Motives:  
  - Программа должна обеспечивать различные вариации алгоритма или поведелния
  - Нужно изменять поведение каждого экземпляра класса
  - Необходимо изменять поведение объектов на стадии выполнения
  - Ведение интерфейса позволяет классам-клиентам ничего не знать о классах, реализующих этот интерфейс и инкапсулирующий алгоритмы
  
##### Participates:  
  - Класс *Strategy* определяет, как будут использоваться различные алгоритмы.
  - Конкретные классы *ConcreteStrategy* реализуют эти различные алгоритмы.
  - Класс *Context* использует конкретные классы *ConcreteStrategy* посредством ссылки на конкретный тип абстрактного класса *Strategy*. Классы *Strategy* и Context взаимодействуют с целью реализации выбранного алгоритма (в некоторых случаях классу *Strategy* требуется посылать запросы классу *Context*). Класс *Context* пересылает классу *Strategy* запрос, поступивший от его класса-клиента.
  
##### Decision:  
Отделение процедуры выбора алгоритма от его реализации. Это позволяет сделать выбор на основании контекста.  

##### Consequences:  
   - Шаблон Strategy определяет семейство алгоритмов.
   - Это позволяет **отказаться** от использования **переключателей или условных операторов**
   - Вызов всех алгоритмов должен осуществляться стандартным образом (все они должны иметь одинаковый интерфейс)
   
##### Implementation:  
Класс, который использует алгоритм *Context*, включает абстрактный класс *Strategy*, обладающий **абстрактным методом**, **определяющим способ вызова алгоритма**. Каждый производный класс реализует один требуемый вариант алгоритма.

##### Note:  
Метод вызова алгоритма не должен быть абстрактным, если требуется реализовать некоторое поведение, принимаемое по умолчанию.

##### Pros:  
 - Инкапсуляция реализации различных алгоритмов, система становится независимой от возможных изменений бизнес-правил;
 - Вызов всех алгоритмов одним стандартным образом;
 - Отказ от использования переключателей и/или условных операторов
 - Замена алгоритмов на лету
 - Реализует принцип Open/Closed

##### Minuses:  
 - Создание дополнительных классов
 - Клиент должен знать, в чем разница между стратегиями, чтобы выбрать подходящую

##### Related templates:  
Мост, Шаблонный метод, Адаптер
