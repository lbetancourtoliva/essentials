"use strict"
//input00 output
//      0 1 2 3 4 5
 
//  0:  1 1 1 0 0 0
//  1:  0 1 0 0 0 0
//  2:  1 1 1 0 0 0
//  3:  0 0 2 4 4 0
//  4:  0 0 0 2 0 0
//  5:  0 0 1 2 4 0

//input08 output

//  -9 -9 -9 1 1 1
//  0 -9 0 4 3 2
//  -9 -9 -9 1 2 3
//  0 0 8 6 6 0
//  0 0 0 -2 0 0
//  0 0 1 2 4 0

let arr = [[-9,-9,-9,1,1,1],[0,-9,0,4,3,2],[-9,-9,-9,1,2,3],[0,0,8,6,6,0],[0,0,0,-2,0,0],[0,0,1,2,4,0]];

function excercise(arr) {
    let maxvalue = Number.NEGATIVE_INFINITY;
    console.log(arr);
    for (let i = 0; i < 4; i++) {
        for (let j = 0; j < 4; j++) {
            let y = 0;            
            let sum = 0;
            for (let k = i; k < i + 3; k++) {
                let x = 0;            
                for (let l = j; l < j + 3; l++) {
                    if (y === 1) {
                        if (x === 1) {
                            sum += arr[k][l];
                        }
                    } else {
                        sum += arr[k][l];
                    }
                    x++;                
                }
                y++;  
            }
            if (sum > maxvalue) {
                maxvalue = sum;                
            }
        }
    }
    console.log(maxvalue);
}


excercise(arr);

