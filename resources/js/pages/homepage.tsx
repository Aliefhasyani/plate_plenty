import FoodCard from "@/components/food-card";
import Navbar from "@/components/navbar";

interface Food {
  id: number;
  name: string;
  description: string;
  image_path: string;
}

interface Props {
  foods: Food[];
}

export default function Homepage({ foods }: Props) {
  return (
    <>
      <Navbar />
      <title>Homepage | Plate & Plenty</title>
      <div className="flex flex-col items-center text-center">
        <h1 className="text-4xl mt-10 tracking-[0.5em] font-bold font-[Quicksand]">
          PLATE & PLENTY
        </h1>
        <p className="font-['Quicksand'] mt-5 text-lg font-bold tracking-[0.1em]">
          QUICK AND EASY FOOD FOR EVERYONE
        </p>
      </div>


      <div className="flex justify-center mt-10">
        <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 justify-items-center w-full max-w-7xl px-4">

          {foods.map((food) => (
            <FoodCard key={food.id} {...food} />
          ))}
        </div>
      </div>

      <div>
          
      </div>
    </>
  );
}
