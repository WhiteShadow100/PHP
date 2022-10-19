/////////////////////////////////////////////////////////////////////////////////////////
// find_by - class name for finding the ements of whose class are to ve changed
// class_name - class name that is to be added
// currnt - current element of whose class needs to be chnaged
/////////////////////////////////////////////////////////////////////////////////////////
function by_classname_single(find_by, class_name, current){
    
    let elements = document.getElementsByClassName(find_by);

    for(i=0;i<elements.length;i++){
        elements[i].classList.remove(class_name)
    }

    current.classList.add(class_name);
}