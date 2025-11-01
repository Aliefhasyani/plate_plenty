
export default function Navbar(){
    return(
        <>
            <nav>
                <div className="bg-[#ABE7B2] flex items-center justify-center text-center gap-25 w-auto h-20 font-[Quicksand] text-2xl font-bold">
                    <a href="" className="text-[#F9F5F0] hover:underline transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 ">HOME</a>
                    <a href="" className="text-[#F9F5F0] hover:underline transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 ">RECIPES</a>
                    <a href="" className="text-[#F9F5F0] hover:underline transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 ">ABOUT</a>
                </div>
            </nav>
        </>
    );
};

