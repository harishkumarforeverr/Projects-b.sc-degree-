 
package javaapplication19; 

import java.io.ByteArrayOutputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import net.glxn.qrgen.QRCode;
import net.glxn.qrgen.image.ImageType;

public class JavaApplication19
{
    public static void main(String[] args) throws FileNotFoundException, IOException {
      String myname="harish kumar Forever";
      ByteArrayOutputStream fout=QRCode.from(myname).to(ImageType.PNG).stream();
      FileOutputStream file=new FileOutputStream("harish809.png");
      file.write(fout.toByteArray());
      file.flush();
      file.close();
      
    }
    
}
