jQuery( document ).ready(function() {
    jQuery.fn.wrapStart = function (numWords) { 
    var node = this.contents().filter(function () { return this.nodeType == 3 }).first(),
        text = node.text(),
        first = text.split(" ", numWords).join(" ");

    if (!node.length)
        return;
    
    node[0].nodeValue = text.slice(first.length);
    node.before('<span>' + first + '</span><br/><hr/>');
};

jQuery('.tester').each(function(){
	jQuery(this).wrapStart(3);
});


});


