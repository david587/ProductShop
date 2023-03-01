package models.api;

import java.io.IOException;
import java.net.HttpURLConnection;
import java.net.URL;

public class CheckApi {
    int responseCode;

    public boolean checkUrl(String urlStr) throws IOException
    {
        try {
            trycheckUrl(urlStr);
            return true;
        } catch (IOException e) {
            System.err.println("Hiba! Nem érhető el");
            return false;
        }
    }

    public void trycheckUrl(String urlStr) throws IOException
    {
        URL url = new URL(urlStr);
        HttpURLConnection http = (HttpURLConnection) url.openConnection();
        http.setRequestMethod("GET");
        http.connect();
        this.responseCode = http.getResponseCode();
    }
}
