using System;
using System.Collections.Generic;
using System.Web;
using System.Text;

/// <summary>
/// Summary description for Class1
/// </summary>
public class Class1
{
	public Class1()
	{
        
	}

    public string MakeCamelFromGet()
    {
        return Camel(HttpContext.Current.Request["babycamel"]);
    }

    /// <summary>
    /// Make my string camel-look.
    /// </summary>
    /// <param name="x">Input string.</param>
    /// <returns>String with lower/upper chars.</returns>
    public string Camel(string x)
    {
        _camelsProcessed++;

        //
        if (string.IsNullOrEmpty(x))
            return string.Empty;

        //
        StringBuilder str = new StringBuilder(x.Length);

        for (int i = 0; i < x.Length; i++)
            str.Append(((i & 1) == 0) ? char.ToUpper(x[i]) : char.ToLower(x[i]));

        return _lastCamel = str.ToString();
    }
    
    /// <summary>
    /// Number of camels built in all processes.
    /// </summary>
    public static int CamelsProcessed { get { return _camelsProcessed; } private set { _camelsProcessed = value; } }
    private static int _camelsProcessed = 0;

    /// <summary>
    /// The last camel created.
    /// </summary>
    public static string LastCamel { get { return _lastCamel; } private set { _lastCamel = value; } }
    private static string _lastCamel = null;
}