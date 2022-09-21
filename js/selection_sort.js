let array = [4,1,-27,2,11,-213,12,4,9,8,227,9,121,3,5,2,78,45,34,8,45,54,2,3,4,4]
let count = 0
function selection_sort(array){

let index = 0;


    for (let i = 0; i< array.length; i++){
        let start = array[i]
        let stepSide = array[i]
        for (let j = i+1; j<array.length; j++){
            if (start >= array[j]){
                start = array[j]
                index = j
            }
            count++;
        }

        array[i] = start;
        array[index] = stepSide;
    }
    return array;
}

console.log(selection_sort(array))
console.log(count)