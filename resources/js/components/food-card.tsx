import HomeButton from "./home-button";

interface CardProps {
  id: number;
  name: string;
  description: string;
  image_path: string;
}

export default function FoodCard({ name, description, image_path }: CardProps) {
  return (
    <div className="bg-white rounded-xl shadow-md p-4 w-64 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110">
      <img
        src={image_path}
        alt={name}
        className="w-full h-64 object-cover rounded-lg"
      />
      <h1 className="font-bold text-lg mt-3 font-[Quicksand]">{name}</h1>
      <p className="text-sm text-gray-600 font-[Quicksand] mt-1">
        {description}
      </p>
      <div className="flex justify-center items-center text-center">
        <HomeButton></HomeButton>
      </div>
    </div>
  );
}
