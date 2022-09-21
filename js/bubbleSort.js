let array = [4,1,-27,2,11,-213,12,4,9,8,227,9,121,3,5,2,78,45,34,8,45,54,2,3,4,4]
let count = 0

function bubbleSort(array){
    for (let i = 0; i< array.length; i++){

        for (let j = 0; j<array.length; j++){
            if (array[j] > array[j+1]){
                let tmp = array[i];
                array[i]=array[j]
                array[j] = tmp
            }
            count++
        }

    }
    return array;
}


console.log(bubbleSort(array))
console.log(count)