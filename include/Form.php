<?php
class Form
{
    private $fields = [];
    private $action;
    private $submit;
    private $jumField = 0;
    public function __construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }
    public function displayForm()
    {
        echo '<div class="card">';
        echo "<form action='" . $this->action . "' method='POST'>";
        echo '<div class="input">';
        for ($j = 0; $j < count($this->fields); $j++) {
            echo "<label>" . $this->fields[$j]['label'] . "</label>";
            echo "<input type='text' value='" . $this->fields[$j]["value"] . "' name='" . $this->fields[$j]['name'] . " ' " . $this->fields[$j]["disabled"] . ">";
        }
        echo "</div>";
        echo "<button type='submit' name='" . $this->submit . "'>Kirim</button>";
        echo "</form>";
        echo "</div>";
    }
    public function addField($name, $label, $value = "", $disabled = "")
    {
        $this->fields[$this->jumField]['name'] = $name;
        $this->fields[$this->jumField]['label'] = $label;
        $this->fields[$this->jumField]['value'] = $value;
        $this->fields[$this->jumField]['disabled'] = $disabled;
        $this->jumField++;
    }
}
