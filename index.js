const columns = document.querySelectorAll(".container-item");

document.addEventListener("dragstart",(e)=>{
    if (e.target.nodeName !== "H1")
       e.target.classList.add("dragging");
});
document.addEventListener("dragend",(e)=>{
    e.target.classList.remove("dragging");
});

columns.forEach((item) => {
    item.addEventListener("dragover", (e) =>{
        const dragging = document.querySelector(".dragging");
        const applyAfter = getNewPosition(item, e.clientY);

        if(applyAfter){
            applyAfter.insertAdjacentElement("afterend",dragging);
        }else{
            item.prepend(dragging)

        }
    });
});

function getNewPosition(column, posY){
    const cards = column.querySelectorAll(".item:not(.dragging)");
    let result;

    for(let refer_card of cards){
        const box = refer_card.getBoundingClientRect();
        const boxCenterY = box.y + box.height / 2;
    
        if(posY >=boxCenterY) result = refer_card;
    }

    return result;
}