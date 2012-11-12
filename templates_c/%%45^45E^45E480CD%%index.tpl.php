<?php /* Smarty version 2.6.18, created on 2012-11-05 05:10:43
         compiled from index.tpl */ ?>
<html>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<head><title>php框架研究v1</title>
	<link rel="stylesheet" type="text/css" href="style/default.css" />
	</head>
	<body>
		<div id="mm">
			<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
  				<p>序号：<?php echo $this->_tpl_vars['arr'][$this->_sections['list']['index']]['ysjId']; ?>
</p>
      			标题：<?php echo $this->_tpl_vars['arr'][$this->_sections['list']['index']]['ysjTitle']; ?>

      			<?php echo $this->_tpl_vars['arr'][$this->_sections['list']['index']]['ysjText']; ?>

      			<img src="<?php echo $this->_tpl_vars['arr'][$this->_sections['list']['index']]['imgurl']; ?>
"></br>
  		    <?php endfor; endif; ?>
		</div>
	</body>
</html>