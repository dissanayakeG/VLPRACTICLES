<template>
   <div class="content-wrapper">
        <div class="form-check">
            {{selectedObjs}}

            <div v-for="(option, index) in list">
                <input class="form-check-input"
                       type="checkbox"
                       :id="option.name"
                       @change="checkGroup(option, $event)"
                >{{option.name}}

                <div v-for="(obj,i) in option.array" class="ml-5">
                    <input class="form-check-input"
                           type="checkbox"
                           :value="obj"
                           :id="obj.name"
                           v-model="selectedObjs"
                           @change="checkSingle(obj,option, $event)">
                    {{obj.name}}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name:'GroupedCheckBoxes',

        mounted() {
            let self = this;
            self.list.forEach((value, index) => {
                if (value.array.every(r => self.selectedObjs.includes(r))) {
                    document.getElementById(value.name).checked = true;
                }
            })
        },

        methods:{
            checkSingle(obj, option, e) {
                console.log('1');
                let self = this;
                self.list.forEach((value, index) => {
                    if (value.name == option.name && e.target.checked == true) {
                        if(value.array.every(r => self.selectedObjs.includes(r))){
                            console.log('Found all of value.array in selectedObjs');
                            document.getElementById(option.name).checked = true;
                        }else{
                            console.log('Did not find all of value.array in selectedObjs');
                        }
                    }else if(value.name == option.name && e.target.checked == false){
                        if(!value.array.every(r => self.selectedObjs.includes(r))) {
                            document.getElementById(option.name).checked = false;
                        }
                    }
                })
            },



            checkGroup(option, e){
                console.log('11');
                let self = this;
                self.list.forEach((value, index)=>{
                    if(value.name == option.name && e.target.checked == true){
                        value.array.forEach((val,i)=>{
                            self.selectedObjs.push(val);
                        })
                    }else if(value.name === option.name && e.target.checked == false){
                        option.array.forEach((val, i)=>{
                            self.selectedObjs.forEach((val2, i2)=>{
                                if(val == val2){
                                    const findIndex = self.selectedObjs.findIndex(a => a.id === val2.id)
                                    findIndex !== -1 && self.selectedObjs.splice(findIndex , 1)
                                }
                            })
                        })
                    }
                    self.selectedObjs.filter(function (a) {
                        return !self[a.id] && (self[a.id] = true);
                    }, Object.create(null));
                })


            }
        },

        data() {
            return {
                selectedObjs: [{id: 1, name: 'aa', age: 12}, {id: 2, name: 'bb', age: 12}, {id: 3,name: 'cc',age: 12}],
                list: [
                    {
                        name: 'A',
                        array: [{id: 1, name: 'aa', age: 12}, {id: 2, name: 'bb', age: 12}, {id: 3,name: 'cc',age: 12}]
                    },
                    {
                        name: 'B',
                        array: [{id: 4, name: 'dd', age: 12}, {id: 5, name: 'ee', age: 12}, {id: 6,name: 'ff',age: 12 }]
                    },
                    {
                        name: 'C',
                        array: [{id: 7, name: 'gg', age: 12}, {id: 8, name: 'hh', age: 12}, {id: 9,name: 'ii',age: 12}]
                    }
                ]
            }
        }
    }
</script>
