<template>
    <div>
        <div class="grid grid-cols-10">
            <button class="p-1 border border-gray-300 rounded font-bold" @click.prevent="bold">B</button>
            <button class="p-1 border border-gray-300 rounded italic" @click.prevent="italic">I</button>
            <button class="p-1 border border-gray-300 rounded underline" @click.prevent="underline">U</button>
            <button class="p-1 border border-gray-300 rounded" @click.prevent="br">Break</button>
            <button class="p-1 border border-gray-300 rounded" @click.prevent="and">&and;</button>
            <button class="p-1 border border-gray-300 rounded" @click.prevent="or">&or;</button>
            <button class="p-1 border border-gray-300 rounded" @click.prevent="rightarr">&rarr;</button>
            <button class="p-1 border border-gray-300 rounded" @click.prevent="botharr">&harr;</button>
            <button class="p-1 border border-gray-300 rounded" @click.prevent="rightArr">&rArr;</button>
            <button class="p-1 border border-gray-300 rounded" @click.prevent="bothArr">&hArr;</button>
        </div>


        <div
            class="border col-span-3 border-gray-300 shadow p-3 @error('desarrollo') border-4 border-red-500 @enderror"
            contenteditable="true"
            id="desarrollo"
            v-html="this.texto"
            @blur="input"
        ></div>


    </div>
</template>
<script>
export default {
    props: ['desarrollo'],
    data() {
        return {
            texto: this.desarrollo,

        }
    },
    mounted() {
        this.texto = this.desarrollo;
    },
    methods: {
        input: function() {
            let textoApunte = document.getElementById('desarrollo').innerHTML;
            this.texto = textoApunte;
            let inputApunte = document.getElementById('inputDesarrollo').value = this.texto;
        },
        bold: function() {
            let textoSeleccionado = document.getSelection().toString();
            let replacementText = textoSeleccionado;
            let element = 'b';
            this.getRange(element,replacementText);
        },
        italic: function() {
            let textoSeleccionado = document.getSelection().toString();
            let replacementText = textoSeleccionado;
            let element = 'i';
            this.getRange(element,replacementText);
        },
        underline: function() {
            let textoSeleccionado = document.getSelection().toString();
            let replacementText = textoSeleccionado;
            let element = 'u';
            this.getRange(element,replacementText);
        },
        br: function() {
            let textoSeleccionado = document.getSelection().toString();
            let replacementText = textoSeleccionado;
            let element = 'br';
            this.getRange(element,replacementText);
        },
        and: function() {
            let textoSeleccionado = document.getSelection().toString();
            let replacementText = '∧';
            let element;
            this.getRange(element,replacementText);
        },
        or: function() {
            let textoSeleccionado = document.getSelection().toString();
            let replacementText = '∨';
            let element;
            this.getRange(element,replacementText);
        },
        rightarr: function() {
            let textoSeleccionado = document.getSelection().toString();
            let replacementText = '→';
            let element;
            this.getRange(element,replacementText);
        },
        botharr: function() {
            let textoSeleccionado = document.getSelection().toString();
            let replacementText = '↔';
            let element;
            this.getRange(element,replacementText);
        },
        rightArr: function() {
            let textoSeleccionado = document.getSelection().toString();
            let replacementText = '⇒';
            let element;
            this.getRange(element,replacementText);
        },
        bothArr: function() {
            let textoSeleccionado = document.getSelection().toString();
            let replacementText = '⇔';
            let element;
            this.getRange(element,replacementText);
        },
        getRange: function(element,replacementText) {
            var sel, range;
            if (window.getSelection().baseNode.parentElement.id == 'desarrollo' && window.getSelection().extentNode.parentElement.id == 'desarrollo') {
                // console.log(element);
                if(typeof element !== undefined) {
                    let el = document.createElement(element);
                    // console.log(el);
                    sel = window.getSelection();
                    range = sel.getRangeAt(0);
                    range.deleteContents();
                    range.insertNode(document.createTextNode(replacementText));
                    range.surroundContents(el);
                } else {
                    sel = window.getSelection();
                    range = getRangeAt(0);
                    range.deleteContents();
                    range.insertNode(document.createTextNode(replacementText));
                }
            }
            this.input();
        }
    }
}
</script>
