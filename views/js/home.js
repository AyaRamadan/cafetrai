let index=-1;
let totalPrice=0;
$(".menuItem").on("click",(event)=>{
    const child=`<div class="row newItem">
        <label for="itemsNumber" class="col-2" >${event.target.id}</label>
        <input class="input-group-text col-1 noOfItems" value="1" name=${event.target.id} readonly >
        <input type="button" class="fa-hand-pointer plus" value="+">
        <input type="button" class="fa-hand-pointer minus" value="-">
        <input class="input-group-text col-3 itemsPrice" value='${event.target.alt}' readonly>
        <input type="button" class="fa-hand-pointer text-black-100 text-bold bg-light remove" value="x"></input>
        </div>`    
    
    const itemPrice=Number(event.target.alt.split(" ")[0]);
    $("#orderItems").append(child);
    $(event.target).css("display","none");
    let obj=$(event.target);
    index++;
    
    calculatingTotlaPrice();

    $($(".plus")[index]).on("click",(event)=>{
        
        let i=1;
        const noOfItems=$(event.target).parent().children(".noOfItems");
        const priceOfItems=$(event.target).parent().children(".itemsPrice");
        noOfItems.val((index,value)=>{
            let newValue=Number(value)+i;
            i++;
            return newValue;
        });
        
        priceOfItems.val((index,value)=>{
            let newValue=Number(value.split(" ")[0])+itemPrice+" LE";
            return newValue;
        });
        calculatingTotlaPrice();
    })
    $($(".minus")[index]).on("click",(event)=>{
        let i=1;
        const noOfItems=$(event.target).parent().children(".noOfItems");
        const priceOfItems=$(event.target).parent().children(".itemsPrice");
        noOfItems.val((index,value)=>{
            if(value>1){
                

                let newValue=Number(value)-i;
                i++;
                return newValue;
            }
            else return value;
        });
        priceOfItems.val((index,value)=>{
            if(Number(value.split(" ")[0])>itemPrice){
                let newValue=Number(value.split(" ")[0])-itemPrice+" LE";
                return newValue;
            }
            else return value;
        });
        calculatingTotlaPrice();
    })
    $($(".remove")[index]).on("click",(event)=>{
        $(event.target).parent().remove();
        obj.css("display","inline-block");
        index--;
        calculatingTotlaPrice();
    })
})

function calculatingTotlaPrice(){
    let priceSelectors=$(".itemsPrice");
    totalPrice=0;
    for(let j=0;j<priceSelectors.length;j++){
        console.log(j);
        
        totalPrice+=Number($(priceSelectors[j]).val().split(" ")[0]);
    }
    $("#totalPriceInput").val(totalPrice+" LE");
}