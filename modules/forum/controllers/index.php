<?php
Class Controller_Index Extends Controller {
	
	function index()
	{
		$this->title="Форум";
		$queryForums = $this->db->query("select * from `forums` order by `id` asc");
		while($forum = $queryForums->fetch()) {
			$querySubforums = $this->db->query("select * from `forum_sub` where `id_forum` = '$forum[id]' order by `time_last_post` desc limit 5");
			while($subforum = $querySubforums->fetch()) $sb[] = "<a href='/forum/sub/$subforum[id]/'>$subforum[name]</a>";
			if (empty ($sb))
				$sb[] = 'Подфорумов нет';
			$sb = implode(', ', $sb);
			$forum["subforums"] = $sb;
			$forums[] = $forum;
			unset ($sb);
		}
		$this->assign("forum", $forums);
	}
	
	
	
	function index_param()
	{
		$f = $this->db->query("select `id`,`name` from `forums` where `id` = '".$_GET['param']."';")->fetch();
		$this->title="Форум - {$f['name']}";
		$queryForums = $this->db->query("select * from `forum_sub` where `id_forum` = '$f[id]' order by `id` asc");
		while($forum = $queryForums->fetch()) {
			$queryTopics = $this->db->query("select * from `forum_topics` where `id_subforum` = '$forum[id]' order by `time` desc limit 5");
			while($topic = $queryTopics->fetch()) $sb[] = "<a href='/forum/topic/$topic[id]/'>$topic[name]</a>";
			if (empty ($sb))
				$sb[] = 'Тем нет';
			$sb = implode(', ', $sb);
			$forum["topics"] = $sb;
			$forums[] = $forum;
			unset ($sb);
		}
		$this->assign("forum", $forums);
	}
	
	
	function sub()
	{
		$db=Registry::get("db");
		$subForum = $db->query("select * from `forum_sub` where `id` = '".intval($_GET['sub'])."';")->fetch();
$Forum = $db->query("select * from `forums` where `id` = '$subForum[id_forum]';")->fetch();

		$pages = new Paginator($db->query("select count(*) from `forum_topics` where `id_subforum` = '$subForum[id]';")->fetchColumn());
		
		$q = $db->query("select * from `forum_topics` where `id_subforum` = '$subForum[id]' order by `up` desc,`time` desc limit {$pages->getLimit()} ");
		
		while($topic=$q->fetch()){
			$topic['posts']=$db->query("SELECT COUNT(*) FROM forum_posts WHERE id_topic = {$topic['id']} ")->fetchColumn();
			$topic['lastpost']=$db->query("SELECT * FROM forum_posts WHERE id_topic = {$topic['id']} ORDER BY id DESC")->fetch();
			$topic['firstpost']=$db->query("SELECT * FROM forum_posts WHERE id_topic = {$topic['id']} ORDER BY id ASC")->fetch();
			$topics[]=$topic;
		}
		
		
		$this->assign("topic", $topics);
		
	}
}
?>