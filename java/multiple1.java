interface a{

	default void myfunc(){
			System.out.println("a interface method");
	}
	
}/**/

class b{
		 public void myfunc(){
				System.out.println("b interface method");
				
		}
}

class multiple extends b implements a{
	
		public static void main (String args[]){
		
		
			multiple m = new multiple();
			m.myfunc();
		}

		public void myfunc(){
			a.super.myfunc();
			super.myfunc();
		}
		

}