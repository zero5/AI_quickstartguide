
import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class TestServlet extends HttpServlet {
	public void doGet(HttpServletRequest request, HttpServletResponse response) {
		Statement stmt = getStmt();
		ResultSet rs = null;

		String param = request.getParameter("id1");
		String saveParam = tmp.FrameworkClassWithFilter.filter(request.getParameter("id2"));

		rs = stmt.executeQuery("SELECT * FROM users WHERE id=" + param);
		rs = stmt.executeQuery("SELECT * FROM users WHERE id=" + saveParam);
		rs = tmp.FrameworkClassWithPvf.pvf(param);
		rs = tmp.FrameworkClassWithPvf.pvf(saveParam);
	}

	public static Statement getStmt() throws ClassNotFoundException, SQLException {
		Class.forName("com.mysql.jdbc.Driver");
		String url = "jdbc:mysql://localhost:3306/test";
		Connection con = DriverManager.getConnection(url, "root", "root");
		return con.createStatement();
	}
	
	private void customEntryPoint(String param1, String param2, HttpServletResponse response) {
        System.out.println(param1);
        response.sendRedirect(param2);
    }
}