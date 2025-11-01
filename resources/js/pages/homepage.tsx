import FoodCard from "@/components/food-card";
import Navbar from "@/components/navbar";

interface Food{
    id:number,
    name:string,
    description:string,
    image_path:string,
};

interface Props{
    foods:Food[];
}

export default function Homepage({foods}:Props){
    return(
        <>
        <Navbar></Navbar>
            <div className="flex text-center items-center justify-center">
                <h1 className="text-4xl mt-10 tracking-[0.5em] font-bold font-[Quicksand]  ">PLATE & PLENTY</h1>
            </div>
                <p className="font-['Quicksand'] flex text-center items-center justify-center mt-7 text-l font-bold tracking-[0.1em] ">QUICK AND EASY FOOD FOR EVERYONE</p>
            <div>
               {foods.map((food)=>
                    <FoodCard key={food.id} {...food}/>
            )}
                   
               
            </div>
        </>
    )
}

