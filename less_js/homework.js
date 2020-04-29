let str = 'hello';
let num = 123;
let flag = true;
let txt = 'true';

console.log(typeof(str));
console.log(typeof(num));
console.log(typeof(flag));
console.log(typeof(txt));

let a1 = 5 + 3;
let a2 = 5 - 3;
let a3 = 5 * 3;
let a4 = 5 / 3;


let a5 = 5 % 3;
let a6 = 3 % 5;
let a7 = 5 + '3';
let a8 = '5' - 3;
let a9 = 75 + 'kg';

let height = 23;
let width = 10;
let s = (height + width) * 2;
console.log(s);

let heightC = 10;
let dC = 4;
let v = heightC * dC;
console.log(v);

// let n = 3;
// let n1 = 3;
// let m = 4;
// let result = math.pow(n * n + n1 * n1);

let M = 34;
if (M > 50){
    let N = 'Big';
    console.log(N);
}else {
    N = 'small';
    console.log(N);
}

let i = 45;
while (i <= 67){
    console.log(i++);
}

let j = 45;
while (j++ < 670){
    if (j % 10 == 0){
        console.log(j);
    }
}

for (i = 45; i <= 67; i++){
    console.log(i);
}

for (i = 45; i <= 670; i++){
    if (i % 10 == 0) {
        console.log(i);
    }
}

let x = 5;
switch (x) {
    case 1 :
        console.log('one');
        break;
    case 2 :
        console.log('two');
        break;
    case 3 :
        console.log('three');
        break;
    case 4 :
        console.log('four');
        break;
    case 5 :
        console.log('five');
        break;
    case 6 :
        console.log('six');
        break;
    case 7 :
        console.log('seven');
        break;
    case 8 :
        console.log('eight');
        break;
    case 9 :
        console.log('nine');
        break;
}

function hello1() {
    console.log('hello');
}
hello1();

function hello2(name) {
    if (name == ''){
        console.log('Hello guest')
    }else {
       return console.log(`Hello ${name}`)
    }
}

hello2('');

function mul(n, m) {
    return console.log(n * m);
}

mul(3, 3);

function repeat(str, n = 2) {
    for (let i = 0; i <= n; i++){
        console.log(str + `${i}`);
    } return true;
}

repeat('hello');

function rgb(x, y, z) {
    return console.log(`rgb(${x}, ${y}, ${z})`);
}
rgb(23, 100,134);

function avg(x, y, z) {
    let result = (x + y + z) / 2;
    return console.log(result);
}
avg(10, 12, 14);

function m(a, b) {
    return mul(a, b);
}

m(4, 4);


function operation(m, n, o) {
    switch (o){
        case '*':
            return mul(m,n);
    }
}
operation(5,5, '*');

function addN(n) {
    return function (n) {
        return n + n;
    }
}

console.log(addN(2)(4));

function words(one, two, three, n) {

    let product = '';

    if(n % 10 == 1 && n % 100 != 11) {
        product = one;
    }
    else if(n % 10 >= 2 && n % 10 <= 4 && (n % 100 >= 20 || n % 100 < 10)) {
        product = two;
    }
    else {
        product = three;
    }
    return console.log (product);
}

words("товар", "товара", "товаров", 41);
