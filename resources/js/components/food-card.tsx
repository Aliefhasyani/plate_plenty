interface CardProps{
    id:number,
    name:string,
    description:string,
    image_path:string
}

export default function FoodCard({name,description,image_path}:CardProps){
    return(
        <>
            <div>
                <img src={image_path} alt="https://placehold.co/400"></img>
                <h1>{name}</h1>
                <p>{description}</p>
            </div>
        </>
    );
};