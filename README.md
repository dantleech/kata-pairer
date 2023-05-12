Kata Pairer
===========

Small utility to generate ronud 1 and round 2 driver/navigator pairs for [code katas](https://github.com/gamontal/awesome-katas/blob/master/README.md#introduction).

## Installation

Run `composer install`

## Create pairs file

Create a file (typically `pairs.csv`) with the first round pairings:

```
Dan,Dario
Elizary,Ilya
Sam,Tom
Cristian,Daniel
Ihor,Roman
```

## Run the program

```
cat pairs.csv | bin/pairup
Round 1
=======

+----------+-----------+
| Driver   | Navigator |
+----------+-----------+
| Dan      | Dario     |
| Elizary  | Ilya      |
| Sam      | Tom       |
| Cristian | Daniel    |
| Ihor     | Roman     |
+----------+-----------+


Round 2
=======

+--------+-----------+
| Driver | Navigator |
+--------+-----------+
| Dario  | Elizary   |
| Ilya   | Sam       |
| Tom    | Cristian  |
| Daniel | Ihor      |
| Roman  | Dan       |
+--------+-----------+
```
