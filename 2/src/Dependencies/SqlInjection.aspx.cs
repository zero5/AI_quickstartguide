
using System.Web.UI;
using System;
using System.Data.SQLite;

namespace Dependencies
{
    public partial class SqlInjection : Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            var conn = new SQLiteConnection { ConnectionString = "connection" };
            conn.GetSchema("command");
            conn.GetSchema(Request.Params["command"]);
            conn = new SQLiteConnection("connection");
            conn.GetSchema(Request.Params["command"]);
            conn = new SQLiteConnection(new SQLiteConnection("connection"));
            conn.GetSchema(Request.Params["command"]);
            conn = new SQLiteConnection("connection", false);
            conn.GetSchema(Request.Params["command"], new[] { "value" });
        }
    }
}