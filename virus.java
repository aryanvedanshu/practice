import java.awt.*;

public class virus {

    public static void main(String[] args) {
        int x, y;

        try {
            Robot bot = new Robot();
            while (true) {
                x = (int) (Math.random() * 1920);
                y = (int) (Math.random() * 1080);
                bot.mouseMove(x,y);
            }
        } catch (AWTException e) {
            e.printStackTrace();
        }
    }
}