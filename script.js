hover = false;

var elem = document.querySelector('.dropdown-trigger');
var instance = M.Dropdown.init(elem, hover);

instance.open();
instance.close();

var elem2 = document.querySelector('.dropdown-trigger2');
var instance2 = M.Dropdown.init(elem2, hover);

instance2.open();
instance2.close();