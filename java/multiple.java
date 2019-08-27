interface a{

	default void myfunc(){
			System.out.println("a interface method");
	}
	
}

interface b{
		default void myfunc(){
				System.out.println("b interface method");
		}
}

class multiple implements a, b{
	
		public static void main (String args[]){
		
		
			multiple m = new multiple();
			m.myfunc();
		}

		public void myfunc(){
			a.super.myfunc();
			b.super.myfunc();
		}
		

}